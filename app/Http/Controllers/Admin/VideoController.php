<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Validation\Rule;
use App\Models\Category;
use App\Models\Video;
use Auth;
use Helper;
use Session;

class VideoController extends Controller
{
    //
    public function videoList(){
        $videos = Video::with('category')->orderBy('id','desc')->get();
        return view('admin.Video.video-list',compact('videos'));
    }
    
    public function addVideo(){
        $categories = Category::get();
        return view('admin.Video.add-video',compact('categories'));
    }
 
    public function videoSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'url' => ['nullable','url',
                Rule::requiredIf(function () use ($request) {
                    return empty($request->video);
                }),
            ],
            'video' => ['nullable','file','mimes:mp4,avi,mov','max:100000',
                Rule::requiredIf(function () use ($request) {
                    return empty($request->url);
                }),
            ],
            // 'thumbnail' => ['nullable','image','mimes:jpeg,png,jpg','max:100000',
            //     Rule::requiredIf(function () use ($request) {
            //         return empty($request->url);
            //     }),
            // ],
            'thumbnail' => ['nullable','image','mimes:jpeg,png,jpg','max:100000'],
            'category_id' => 'required',
            'title' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $folderPath = public_path().'/video';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        $videoname = '';
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $extension  = $video->getClientOriginalExtension();
            $videoname = 'Video_'.random_int(10000, 99999). '.' . $extension;
            $video->move(public_path('video'), $videoname);
        }

        $thumbname = '';
        if ($request->hasFile('thumbnail')) {
            $thumb = $request->file('thumbnail');
            $extension  = $thumb->getClientOriginalExtension();
            $thumbname = 'Thumbnail_'.random_int(10000, 99999). '.' . $extension;
            $thumb->move(public_path('video'), $thumbname);
        }

        $video = new Video;
        $video->url = $request->url;
        $video->category_id = $request->category_id;
        $video->video = $videoname;
        $video->thumbnail_image = $thumbname;
        $video->title = $request->title;
        $video->save();
        return redirect()->route('videoList')->with('message', 'Video added successfully');
    }

    public function videoEdit($id){
        $video = Video::findOrFail($id);
        if(!empty($video)){
            $categories = Category::get();
            return view('admin.Video.edit-video',compact('video','categories'));
        }
        return redirect()->route('videoList')->with('message', 'Video not found');
    } 

    public function videoUpdate(Request $request){
        $folderPath = public_path().'/video';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        $video = Video::find($request->id);
        
        $videoname = '';
        if ($request->hasFile('video')) {
            $video_path = public_path('video/' . $video->video);
            if (File::exists($video_path)) {
                if (!is_writable($video_path)) {
                    chmod($video_path, 0777);
                }
                File::delete($video_path);
            }
            $video_file = $request->file('video');
            $extension  = $video_file->getClientOriginalExtension();
            $videoname = 'Video_'.random_int(10000, 99999). '.' . $extension;
            $video_file->move(public_path('video'), $videoname);
        }elseif($request->video == null){
            $video_path = public_path('video/' . $video->video);
            if (File::exists($video_path)) {
                if (!is_writable($video_path)) {
                    chmod($video_path, 0777);
                }
                File::delete($video_path);
            }
            $videoname = $request->video;
        }

        $thumbname = '';
        if ($request->hasFile('thumbnail')) {
            $thumb_path = public_path('video/' . $video->thumbnail_image);
            if (File::exists($thumb_path)) {
                if (!is_writable($thumb_path)) {
                    chmod($thumb_path, 0777);
                }
                File::delete($thumb_path);
            }
            $thumbnail_file = $request->file('thumbnail');
            $extension  = $thumbnail_file->getClientOriginalExtension();
            $thumbname = 'Thumbnail_'.random_int(10000, 99999). '.' . $extension;
            $thumbnail_file->move(public_path('video'), $thumbname);
        }elseif($request->thumbnail == null){
            $thumb_path = public_path('video/' . $video->thumbnail_image);
            if (File::exists($thumb_path)) {
                if (!is_writable($thumb_path)) {
                    chmod($thumb_path, 0777);
                }
                File::delete($thumb_path);
            }
            $thumbname = $request->thumbnail;
        }

        $video->url = $request->url;
        $video->category_id = $request->category_id;
        $video->video = ($videoname === '') ? $video->video : ($videoname !== null ? $videoname : '');
        $video->thumbnail_image = ($thumbname === '') ? $video->thumbnail_image : ($videoname !== null ? $thumbname : '');
        $video->title = $request->title;
        $video->save();
        return redirect()->route('videoList')->with('message', 'Video updated successfully');
    }

    public function videoDelete($id){
        $video = Video::findOrFail($id);
        if(!empty($video) && ($video->thumbnail_image !== '')){
            $thumbnail_image = public_path('video/' . $video->thumbnail_image);
            if (File::exists($thumbnail_image)) {
                if (!is_writable($thumbnail_image)) {
                    chmod($thumbnail_image, 0777);
                }
                File::delete($thumbnail_image);
            }
        }

        if(!empty($video) && ($video->video !== '')){
            $video1 = public_path('video/' . $video->video);
            if (File::exists($video1)) {
                if (!is_writable($video1)) {
                    chmod($video1, 0777);
                }
                File::delete($video1);
            }
        }
        $video->delete();
        return redirect()->route('videoList')->with('message', 'Video deleted successfully');
    } 
}

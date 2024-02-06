<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Banner;
use App\Models\Category;
use Auth;
use Helper;
use Session;

class BannerManagementController extends Controller
{
    //
    public function bannerList(){
        $banners = Banner::with('category')->orderBy('id','desc')->get();
        return view('admin.Banner.banner-list',compact('banners'));
    }
    
    public function addBanner(){
        $categories = Category::get();
        return view('admin.Banner.add-banner',compact('categories'));
    }
    
    public function bannerSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'category_id'=>"required",
            'image'=>"required|file|mimes:jpeg,png,jpg|max:100000",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $folderPath = public_path().'/banner';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Banner_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('banner'), $imagename);
        }
        
        $banner = new Banner;
        $banner->category_id = $request->category_id;
        $banner->image = $imagename;
        $banner->save();
        return redirect()->route('bannerList')->with('message', 'Banner added successfully');
    }
 
    public function bannerEdit($id){
        $banner = Banner::findOrFail($id);
        if(!empty($banner)){
            $categories = Category::get();
            return view('admin.Banner.edit-banner',compact('banner','categories'));
        }
        return redirect()->route('bannerList')->with('message', 'Banner not found');
    } 

    public function bannerUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'category_id'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        
        $banner = Banner::find($request->id);
        
        $folderPath = public_path().'/banner';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagename = '';
        if ($request->hasFile('image')) {
            $image_path = public_path('banner/' . $banner->image);
            if (File::exists($image_path)) {
                if (!is_writable($image_path)) {
                    chmod($image_path, 0777);
                }
                File::delete($image_path);
            }
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Banner_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('banner'), $imagename);
        }
        
        $banner->category_id = $request->category_id;
        $banner->image = ($imagename == '') ? $banner->image : $imagename;
        $banner->save();
        return redirect()->route('bannerList')->with('message', 'Banner updated successfully');
    }

    public function bannerDelete($id){
        $banner = Banner::findOrFail($id);
        if(!empty($banner)){
            $image = public_path('banner/' . $banner->image);
            if (File::exists($image)) {
                if (!is_writable($image)) {
                    chmod($image, 0777);
                }
                File::delete($image);
            }
        }

        $banner->delete();
        return redirect()->route('bannerList')->with('message', 'Banner deleted successfully');
    } 
    
}

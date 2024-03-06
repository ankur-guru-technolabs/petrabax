<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\HomeMenu;
use App\Models\HomeMenuDetail;
use Auth;
use Helper;
use Session;

class MenuManagementController extends Controller
{
    //
    public function menuList(){
        $menus = HomeMenu::orderby('id','desc')->get();
        return view('admin.Menu.menu-list',compact('menus'));
    }

    public function addMenu(){
        return view('admin.Menu.add-menu');
    }
 
    public function menuSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>"required",
            'order'=>"required",
            'image_size'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $existingRecord = HomeMenu::where('order', $request->order)->first();

        if ($existingRecord) {
            \DB::statement("
                UPDATE `home_menus`
                SET `order` = CAST(`order` AS UNSIGNED INTEGER) + 1
                WHERE `order` >= {$request->order}
            ");
        }

        $home_menu = new HomeMenu;
        $home_menu->title = $request->title;
        $home_menu->order = $request->order;
        $home_menu->image_size = $request->image_size;
        $home_menu->save();
        return redirect()->route('menuList')->with('message', 'Menu added successfully'); 
    }
   
    public function editMenu($id){
        $menu = HomeMenu::where('id',$id)->first();
        if(!empty($menu)){
            return view('admin.Menu.edit-menu',compact('menu'));
        }
        return redirect()->route('menuList')->with('message', 'Menu not found');
    }
    
    public function menuUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>"required",
            'order'=>"required",
            'image_size'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $home_menu = HomeMenu::where('id',$request->id)->first();
        $existingRecord = HomeMenu::where('order', $request->order)->first();

        if ($existingRecord && ($home_menu->order !== $request->order)) { 
            \DB::statement("
                UPDATE `home_menus`
                SET `order` = CAST(`order` AS UNSIGNED INTEGER) + 1
                WHERE `order` >= {$request->order}
                AND `id` != {$request->id}
            ");
        }

        $home_menu->title = $request->title;
        $home_menu->order = $request->order;
        $home_menu->image_size = $request->image_size;
        $home_menu->update();
        return redirect()->route('menuList')->with('message', 'Menu updated successfully'); 
    }

    public function deleteMenu($id){
        $menu = HomeMenu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menuList')->with('message', 'Menu  deleted successfully');
    }
    
    public function homeList(){
        $home_menu_detail = HomeMenuDetail::with('mainMenu')->orderby('id','desc')->get();
        return view('admin.Home.home-list',compact('home_menu_detail'));
    }
    
    public function addHome(){
        $menus = HomeMenu::orderby('id','desc')->get();
        return view('admin.Home.add-home',compact('menus'));
    }
   
    public function homeSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'category_id' => 'required',
            'img_alt' => 'required',
            'end_point' => 'required',
            'description' => 'required',
            'image'=>"required|file|mimes:jpeg,png,jpg|max:100000",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $folderPath = public_path().'/home_menu';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Home_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('home_menu'), $imagename);
        }
        
        $home = new HomeMenuDetail;
        $home->title = $request->title;
        $home->category_id = $request->category_id;
        $home->img_alt = $request->img_alt;
        $home->end_point = $request->end_point;
        $home->description = $request->description;
        $home->image = $imagename;
        $home->save();

        return redirect()->route('homeList')->with('message', 'Home added successfully'); 
    }
   
    public function editHome($id){
        $home_menu = HomeMenuDetail::where('id',$id)->first();
        if(!empty($home_menu)){
            $menus = HomeMenu::orderby('id','desc')->get();
            return view('admin.Home.edit-home',compact('home_menu','menus'));
        }
        return redirect()->route('homeList')->with('message', 'Home menu not found');
    }
    
    public function homeUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'category_id' => 'required',
            'img_alt' => 'required',
            'end_point' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $home = HomeMenuDetail::find($request->id);

        $folderPath = public_path().'/home_menu';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagename = '';
        if ($request->hasFile('image')) {
            $image_path = public_path('home_menu/' . $home->image);
            if (File::exists($image_path)) {
                if (!is_writable($image_path)) {
                    chmod($image_path, 0777);
                }
                File::delete($image_path);
            }
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Home_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('home_menu'), $imagename);
        }

        $home->title = $request->title;
        $home->category_id = $request->category_id;
        $home->img_alt = $request->img_alt;
        $home->end_point = $request->end_point;
        $home->description = $request->description;
        $home->image = ($imagename == '') ? $home->image : $imagename;
        $home->save();

        return redirect()->route('homeList')->with('message', 'Home updated successfully'); 
    }

    public function deleteHome($id){
        $menu = HomeMenuDetail::findOrFail($id);
        if(!empty($menu)){
            $image = public_path('home_menu/' . $menu->image);
            if (File::exists($image)) {
                if (!is_writable($image)) {
                    chmod($image, 0777);
                }
                File::delete($image);
            }
        }
        $menu->delete();
        return redirect()->route('homeList')->with('message', 'Home  deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Category;
use Auth;
use Helper;
use Session;

class CategoryController extends Controller
{
    //
    public function categoryList(){
        $categories = Category::with('mainCategory')->orderBy('id','desc')->get();
        return view('admin.Category.category-list',compact('categories'));
    }

    public function addCategory(){
        $categories = Category::where('main_category_id',0)->get();
        return view('admin.Category.add-category',compact('categories'));
    }
    
    public function categorySubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
        ]);
        
        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $input = $request->all();
        Category::create($input);
 
        return redirect()->route('categoryList')->with('message', 'Category added successfully');
    } 
    
    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        $categories = Category::where('main_category_id',0)->get();
        return view('admin.Category.edit-category',compact('category','categories'));
    } 
    
    public function categoryUpdate(Request $request){
        $input = $request->all();
        Category::where('id',$request->id)->update(['name'=>$request->name,'main_category_id'=>$request->main_category_id]);
        return redirect()->route('categoryList')->with('message', 'Category updated successfully');
    } 

    public function categoryDelete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categoryList')->with('message', 'Category deleted successfully');
    } 
}


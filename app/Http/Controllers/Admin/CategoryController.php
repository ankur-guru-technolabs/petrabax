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
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.Category.category-list',compact('categories'));
    }

    public function addCategory(){
        return view('admin.Category.add-category');
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
    
    public function categoryDelete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categoryList')->with('message', 'Category deleted successfully');
    } 
    
    public function categoryUpdate(Request $request){
        $input = $request->all();
        Category::where('id',$request->id)->update(['name'=>$request->name]);
        return redirect()->route('categoryList')->with('message', 'Category updated successfully');
    } 
}

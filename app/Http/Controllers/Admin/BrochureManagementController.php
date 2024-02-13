<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Brochure;
use App\Models\Category;
use Auth;
use Helper;
use Session;

class BrochureManagementController extends Controller
{
    //
    public function brochureList(){
        $brochures = Brochure::with('category')->orderBy('id','desc')->get();
        return view('admin.Brochure.brochure-list',compact('brochures'));
    }
    
    public function addBrochure(){
        $categories = Category::get();
        return view('admin.Brochure.add-brochure',compact('categories'));
    }
    
    public function brochureSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
            'category_id'=>"required",
            'order'=>"required",
            'image'=>"required|file|mimes:jpeg,png,jpg|max:100000",
            'pdf'=>"required|file|mimes:pdf|max:100000",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $existingRecord = Brochure::where('category_id', $request->category_id)->where('order', $request->order)->first();

        if ($existingRecord) {
            \DB::table('brochures')
            ->where('category_id', $request->category_id)
            ->where('order', '>=', $request->order)
            ->increment('order');
        }

        $folderPath = public_path().'/brochure';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        $imagename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Brochure_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('brochure'), $imagename);
        }
        
        $folderPath = public_path().'/brochure_pdf';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $pdfname = '';
        if ($request->hasFile('pdf')) {
            $image = $request->file('pdf');
            $extension  = $image->getClientOriginalExtension();
            $pdfname = 'Pdf_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('brochure_pdf'), $pdfname);
        }

        $brochure = new Brochure;
        $brochure->name = $request->name;
        $brochure->category_id = $request->category_id;
        $brochure->order = $request->order;
        $brochure->image = $imagename;
        $brochure->pdf = $pdfname;
        $brochure->save();
        return redirect()->route('brochureList')->with('message', 'Brochure added successfully');
    }
 
    public function brochureEdit($id){
        $brochure = Brochure::where('id',$id)->first();
        if(!empty($brochure)){
            $categories = Category::get();
            return view('admin.Brochure.edit-brochure',compact('brochure','categories'));
        }
        return redirect()->route('brochureList')->with('message', 'Brochure not found');
    } 

    public function brochureUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
            'category_id'=>"required",
            'order'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        
        $brochure = Brochure::find($request->id);
        $existingRecord = Brochure::where('category_id', $request->category_id)->where('order', $request->order)->first();

        if ($existingRecord && ($brochure->order !== $request->order)) {
            \DB::table('brochures')
            ->where('category_id', $request->category_id)
            ->where('order', '>=', $request->order)
            ->where('id', '!=', $request->id)
            ->increment('order');
        }

        $folderPath = public_path().'/brochure';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagename = '';
        if ($request->hasFile('image')) {
            $image_path = public_path('brochure/' . $brochure->image);
            if (File::exists($image_path)) {
                if (!is_writable($image_path)) {
                    chmod($image_path, 0777);
                }
                File::delete($image_path);
            }
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Brochure_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('brochure'), $imagename);
        }
        
        $folderPath = public_path().'/brochure_pdf';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $pdfname = '';
        if ($request->hasFile('pdf')) {
            $pdf_path = public_path('brochure_pdf/' . $brochure->pdf);
            if (File::exists($pdf_path)) {
                if (!is_writable($pdf_path)) {
                    chmod($pdf_path, 0777);
                }
                File::delete($pdf_path);
            }
            $image = $request->file('pdf');
            $extension  = $image->getClientOriginalExtension();
            $pdfname = 'Pdf_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('brochure_pdf'), $pdfname);
        }

        $brochure->name = $request->name;
        $brochure->category_id = $request->category_id;
        $brochure->order = $request->order;
        $brochure->image = ($imagename == '') ? $brochure->image : $imagename;
        $brochure->pdf = ($pdfname == '') ? $brochure->pdf : $pdfname;
        $brochure->save();
        return redirect()->route('brochureList')->with('message', 'Brochure updated successfully');
    }

    public function brochureDelete($id){
        $brochure = Brochure::findOrFail($id);
        if(!empty($brochure)){
            $image = public_path('brochure/' . $brochure->image);
            if (File::exists($image)) {
                if (!is_writable($image)) {
                    chmod($image, 0777);
                }
                File::delete($image);
            }

            $pdf = public_path('brochure_pdf/' . $brochure->pdf);
            if (File::exists($pdf)) {
                if (!is_writable($pdf)) {
                    chmod($pdf, 0777);
                }
                File::delete($pdf);
            }
        }

        \DB::table('brochures')
        ->where('category_id', $brochure->category_id)
        ->where('order', '>', $brochure->order)
        ->decrement('order');

        $brochure->delete();
        return redirect()->route('brochureList')->with('message', 'Brochure deleted successfully');
    } 
    
    public function brochureCategoryCount($id){
        $brochure = Brochure::where('category_id',$id)->count();
        return $brochure;
    } 
}

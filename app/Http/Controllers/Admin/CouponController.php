<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Category;
use App\Models\Coupon;
use Auth;
use Helper;
use Session;

class CouponController extends Controller
{
    //
    public function couponList(){
        $coupons = Coupon::with('category')->latest()->get();
        return view('admin.Coupon.coupon-list',compact('coupons'));
    }

    public function addCoupon(){
        $categories = Category::get();
        return view('admin.Coupon.add-coupon',compact('categories'));
    }
   
    public function couponSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'code' => 'required',
            'category_id' => 'required',
            'user_type' => 'required',
            'max_discount' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $coupon = new Coupon;
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->category_id = $request->category_id;
        $coupon->user_type = $request->user_type;
        $coupon->max_discount = $request->max_discount;
        $coupon->discount_type = $request->discount;
        $coupon->percentage_discount = $request->percentage_discount;
        $coupon->price_discount = $request->price_discount;
        $coupon->start_date = \DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $coupon->end_date = \DateTime::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');
        $coupon->save();
         
        return redirect()->route('couponList')->with('message', 'Coupon added successfully');
    }
 
    public function couponEdit($id){
        $coupon = Coupon::findOrFail($id);
        if(!empty($coupon)){
            $categories = Category::get();
            return view('admin.Coupon.edit-coupon',compact('coupon','categories'));
        }
        return redirect()->route('couponList')->with('message', 'Coupon not found');
    } 

    public function couponUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'code' => 'required',
            'category_id' => 'required',
            'user_type' => 'required',
            'max_discount' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $coupon = Coupon::find($request->id);
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->category_id = $request->category_id;
        $coupon->user_type = $request->user_type;
        $coupon->max_discount = $request->max_discount;
        $coupon->discount_type = $request->discount;
        $coupon->percentage_discount = $request->percentage_discount;
        $coupon->price_discount = $request->price_discount;
        $coupon->start_date = \DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $coupon->end_date = \DateTime::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');
        $coupon->save();
         
        return redirect()->route('couponList')->with('message', 'Coupon updated successfully');
    }

    public function couponDelete($id){
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return redirect()->route('couponList')->with('message', 'Coupon deleted successfully');
    } 
}

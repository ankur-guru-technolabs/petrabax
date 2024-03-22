<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Category;
use App\Models\Commission;
use App\Models\User;
use Auth;
use Helper;
use Session;

class CommissionManagementController extends Controller
{
    //
    public function commissionList(){
        $commission = Commission::with('category')->orderby('id','desc')->get();
        return view('admin.Commission.commission-list',compact('commission'));
    }
   
    public function addCommission(){
        $categories = Category::where('main_category_id',0)->get();
        $agents = User::where('type','travel_agent')->orderby('id','desc')->get();
        return view('admin.Commission.add-commission',compact('categories','agents'));
    }

    public function commissionSubmit(Request $request){ 
        $Commission = new Commission;
        $Commission->commission_name = $request->commission_name;
        $Commission->category_id = $request->category_id;
        $Commission->agent_id = $request->agent_id;
        $Commission->commission =  $request->commission_amount > 0 ? $request->commission_amount : str_replace('%', '', $request->commission_percentage);
        $Commission->commission_type = $request->commission_amount > 0 ? 'amount' : 'percentage';
        $Commission->save();
        return redirect()->route('commissionList')->with('message', 'Commission added successfully');
    }
   
    public function commissionEdit($id){
        $commission = Commission::findOrFail($id);
        if(!empty($commission)){
            $categories = Category::where('main_category_id',0)->get();
            $agents = User::where('type','travel_agent')->orderby('id','desc')->get();
            return view('admin.Commission.edit-commission',compact('commission','categories','agents'));
        }
        return redirect()->route('commissionList')->with('message', 'Commission not found');
    }
   
    public function commissionUpdate(Request $request){
        $Commission = Commission::find($request->id);
        $Commission->commission_name = $request->commission_name;
        $Commission->category_id = $request->category_id;
        $Commission->agent_id = $request->agent_id;
        $Commission->commission =  $request->commission_amount > 0 ? $request->commission_amount : str_replace('%', '', $request->commission_percentage);
        $Commission->commission_type = $request->commission_amount > 0 ? 'amount' : 'percentage';
        $Commission->save();
        return redirect()->route('commissionList')->with('message', 'Commission updated successfully');
    }
   
    public function commissionDelete($id){
        $commission = Commission::findOrFail($id);
        $commission->delete();
        return redirect()->route('commissionList')->with('message', 'Commission deleted successfully');
    }
}



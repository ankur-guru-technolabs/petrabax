<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Fee;
use App\Models\User;
use Auth;
use Helper;
use Session;

class feeManagementController extends Controller
{
    //
    public function feeList(){
        $fee = Fee::with('user')->orderby('id','desc')->get();
        return view('admin.Fee.fee-list',compact('fee'));
    }
    
    public function addFee(){
        $agents = User::where('type','travel_agent')->orderby('id','desc')->get();
        return view('admin.Fee.add-fee',compact('agents'));
    }
    
    public function feeSubmit(Request $request){ 
        $fee = new Fee;
        $fee->amount = $request->amount;
        $fee->agent_id = $request->agent_id;
        $fee->percentage = str_replace('%', '', $request->percentage); 
        $fee->card_fees = str_replace('%', '', $request->card_fees); 
        $fee->save();
        return redirect()->route('feeList')->with('message', 'Fee added successfully');
    }
    
    public function feeEdit($id){  
        $fee = Fee::findOrFail($id);
        if(!empty($fee)){
            $agents = User::where('type','travel_agent')->orderby('id','desc')->get();
            return view('admin.Fee.edit-fee',compact('fee','agents'));
        }
        return redirect()->route('feeList')->with('message', 'Fee not found');
    }
    
    public function feeUpdate(Request $request){  
        $fee = Fee::find($request->id);
        $fee->amount = $request->amount;
        $fee->agent_id = $request->agent_id;
        $fee->percentage = str_replace('%', '', $request->percentage); 
        $fee->card_fees = str_replace('%', '', $request->card_fees); 
        $fee->save();
        return redirect()->route('feeList')->with('message', 'Fee updated successfully');
    }

    public function feeDelete($id){
        $fee = Fee::findOrFail($id);
        $fee->delete();
        return redirect()->route('feeList')->with('message', 'Fee deleted successfully');
    }
}

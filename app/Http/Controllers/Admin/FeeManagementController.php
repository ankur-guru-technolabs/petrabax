<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class feeManagementController extends Controller
{
    //
    public function feeList(){
        return view('admin.Fee.fee-list');
    }
    
    public function addFee(){
        return view('admin.Fee.add-fee');
    }
 
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class WithdrawManagementController extends Controller
{
    //
    public function withdrawList(){
        return view('admin.Withdraw.withdraw-list');
    }
    
    public function withdrawAgentDetail(){
        return view('admin.Withdraw.withdraw-agent-detail');
    }
   
    public function withdrawDetail(){
        return view('admin.Withdraw.withdraw-detail');
    }
 
}

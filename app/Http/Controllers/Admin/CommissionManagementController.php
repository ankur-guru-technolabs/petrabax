<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class CommissionManagementController extends Controller
{
    //
    public function commissionList(){
        return view('admin.Commission.commission-list');
    }
}



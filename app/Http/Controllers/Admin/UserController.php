<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class UserController extends Controller
{
    //
    public function userList(){
        return view('admin.User.user-list');
    }
    
    public function userView(){
        return view('admin.User.user-details');
    }
 
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class RolePermissionController extends Controller
{
    //
    public function addRole(){
        return view('admin.Role.add-role');
    }
 
}

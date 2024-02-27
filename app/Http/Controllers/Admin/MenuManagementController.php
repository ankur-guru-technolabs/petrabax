<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class MenuManagementController extends Controller
{
    //
    public function addMenu(){
        return view('admin.Menu.add-menu');
    }
   
    public function editMenu(){
        return view('admin.Menu.edit-menu');
    }
    
    public function menuList(){
        return view('admin.Menu.menu-list');
    }
 
}

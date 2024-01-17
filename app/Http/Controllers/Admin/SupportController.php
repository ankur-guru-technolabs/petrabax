<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class SupportController extends Controller
{
    //
    public function supportList(){
        return view('admin.Support.support-list');
    }
 
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class ContentManagementController extends Controller
{
    //
    public function contentList(){
        return view('admin.Content.content-list');
    }
}

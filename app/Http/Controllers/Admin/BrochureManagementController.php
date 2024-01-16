<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class BrochureManagementController extends Controller
{
    //
    public function addBrochure(){
        return view('admin.Brochure.add-brochure');
    }
 
}

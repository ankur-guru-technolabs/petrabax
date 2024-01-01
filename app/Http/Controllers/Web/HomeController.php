<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Temp;
use App\Models\User;
use Auth;
use Helper;
use Session;

class HomeController extends Controller
{
    //
    public function mainProfile(){
        return view('web.Home.main-profile');
    }
   
    public function logout(){
        Auth::logout();
        return redirect()->route('/')->with('message','Logout Successfully');

    }
}

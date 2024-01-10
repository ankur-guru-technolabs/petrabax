<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class InfoController extends Controller
{
    //
    public function aboutUs(){
        return view('web.Info.about-us');
    }
  
    public function termsCondition(){
        return view('web.Info.terms-condition');
    }
   
    public function videoLibrary(){
        return view('web.Info.video-library');
    }
    
    public function contactUs(){
        return view('web.Info.contact-us');
    }
}

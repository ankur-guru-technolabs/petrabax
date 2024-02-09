<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Video;
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
   
    public function videoLibrary($search = null){
        $videos = Video::with('category')
                ->when($search, function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%');
                })
                ->orderBy('id','desc')->paginate(12);
        return view('web.Info.video-library', compact('videos', 'search'));
    }
    
    public function contactUs(){
        return view('web.Info.contact-us');
    }
}

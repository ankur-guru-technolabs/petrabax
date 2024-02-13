<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Brochure;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Support;
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
        $terms = Setting::where('key','terms_condition')->first();
        return view('web.Info.terms-condition',compact('terms'));
    }

    public function privacyPolicy(){
        $policy = Setting::where('key','privacy_policy')->first();
        return view('web.Info.privacy-policy',compact('policy'));
    }
   
    public function cookieStatement(){
        $cookie = Setting::where('key','cookie')->first();
        return view('web.Info.cookie',compact('cookie'));
    }
   
    public function videoLibrary($search = null){
        $videos = Video::with('category')
                ->when($search, function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%');
                })
                ->orderBy('id','desc')->paginate(12);
        return view('web.Info.video-library', compact('videos', 'search'));
    }
   
    public function brochureList($cat_id=null,$search = null){
        $categories = Category::all();
        $brochures = new Collection;
        if($categories->isNotEmpty()){
            $cat_id = ($cat_id==null) ? $categories->first()->id : $cat_id;
            $brochures = Brochure::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->where('category_id',$cat_id)
            ->orderBy('order','asc')->paginate(20);
        }
        return view('web.Info.brochure-list', compact('brochures', 'categories', 'cat_id', 'search'));
    }
    
    public function contactUs(){
        $categories = Category::all();
        return view('web.Info.contact-us',compact('categories'));
    }
    
    public function contactUsSubmit(Request $request){
        $support = new Support;
        $support->first_name  = $request->first_name;
        $support->last_name   = $request->last_name;
        $support->email       = $request->email;
        $support->category_id = $request->category_id;
        $support->contact_no  = $request->contact_no;
        $support->inquiry     = $request->inquiry;
        $support->save();

        $email_data   = [
            'email'               => $request->email,
            'first_name'          => $request->first_name,
            'last_name'           => $request->last_name,
            'inquiry_data'        => $request->inquiry,
            'inquiry'             => 'inquiry',
            'subject'             => 'Support inquiry',
        ];
        Helper::sendMail('emails.support_inquiry', $email_data, env('ADMIN_EMAIL','admin@gmail.com'), '');

        return redirect()->route('contactUs')->with('message', 'Support request done successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Setting;
use Auth;
use Helper;
use Session;

class ContentManagementController extends Controller
{
    //
    public function contentList(){
        $activeTab = session('activeTab');
        if (!$activeTab) {
            $activeTab = 'privacy_policy';
        }
        
        $data = Setting::get();

        return view('admin.Content.content-list')->with('data',$data)->with('activeTab', $activeTab);
    }
  
    public function contentSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'key'=>"required",
            'description'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator)->with('activeTab', $request['key']);
        }

        $input = $request->all();
        $insert_data['value']       = $input['description'];

        Setting::where('key',$request->key)->update($insert_data);
 
        return redirect()->route('contentList')->with('activeTab', $input['key'])->with('message', 'Content submitted successfully');
    } 
}

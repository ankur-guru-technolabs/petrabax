<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Role;
use Auth;
use Helper;
use Session;

class RoleController extends Controller
{
    //
    public function roleList(){
        $roles = Role::orderBy('id','desc')->get();
        return view('admin.Role.role-list',compact('roles'));
    }

    public function addRole(){
        return view('admin.Role.add-role');
    }
 
    public function roleSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $input = $request->all();
        Role::create($input);
 
        return redirect()->route('roleList')->with('message', 'Role added successfully');
    } 
    
    public function roleDelete($id){
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roleList')->with('message', 'Role deleted successfully');
    } 
    
    public function roleUpdate(Request $request){
        $input = $request->all();
        Role::where('id',$request->id)->update(['name'=>$request->name]);
        return redirect()->route('roleList')->with('message', 'Role updated successfully');
    } 
}

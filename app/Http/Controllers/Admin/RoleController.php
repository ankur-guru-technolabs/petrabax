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
            'permission'=>"required|array",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $input = $request->all();
        $input['permission'] = implode(',',$request->permission);
        Role::create($input);
 
        return redirect()->route('roleList')->with('message', 'Role added successfully');
    } 

    public function roleEdit($id){
        $role = Role::findOrFail($id);
        if(!empty($role)){
            return view('admin.Role.edit-role',compact('role'));
        }
        return redirect()->route('employeeList')->with('message', 'Role not found');
    } 
    
    public function roleUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
            'permission'=>"required|array",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $input = $request->except('_token');
        $input['permission'] = implode(',',$request->permission);
        Role::where('id',$request->id)->update($input);
        return redirect()->route('roleList')->with('message', 'Role updated successfully');
    } 

    public function roleDelete($id){
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roleList')->with('message', 'Role deleted successfully');
    } 
}

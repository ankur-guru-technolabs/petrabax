<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Employee; 
use App\Models\Role; 
use Auth;
use Helper;
use Session;

class EmployeeController extends Controller
{
    //
    public function employeeList(){
        $employees = Employee::with('role')->orderBy('id','desc')->get();
        return view('admin.Employee.employee-list',compact('employees'));
    }

    public function addEmployee(){
        $roles = Role::all();
        return view('admin.Employee.add-employee',compact('roles'));
    }
 
    public function employeeSubmit(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
            'email' => 'required|email|unique:employees,email',
            'role_id'=>"required",
            'contact'=>"required",
            'password'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        Employee::create($input);

        $email_data   = [
                'email'               => $input['email'],
                'password'            => $request['password'],
                'employee_pwd'        => 'employee_pwd',
                'subject'             => 'Employee Password',
            ];
        Helper::sendMail('emails.employee_pwd', $email_data, $input['email'], '');
       
        return redirect()->route('employeeList')->with('message', 'Employee added successfully');
    } 
    
    public function employeeEdit($id){
        $employee = Employee::findOrFail($id);
        if(!empty($employee)){
            $roles = Role::all();
            return view('admin.Employee.edit-employee',compact('employee','roles'));
        }
        return redirect()->route('employeeList')->with('message', 'Employee not found');
    } 
    
    public function employeeUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>"required",
            'email' => 'required|email|unique:employees,email,' . $request->id,
            'role_id'=>"required",
            'contact'=>"required",
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        
        if($request->password != null){
            $input = $request->except('_token');
            $input['password'] = bcrypt($request->password);
        }else{
            $input = $request->except('_token','password');
        }
        
        Employee::where('id',$request->id)->update($input);
 
        if($request->password != null){
            $email_data   = [
                'email'               => $input['email'],
                'password'            => $request->password,
                'employee_pwd'        => 'employee_pwd',
                'subject'             => 'Employee Password',
            ];
            Helper::sendMail('emails.employee_pwd', $email_data, $input['email'], '');
        }

        return redirect()->route('employeeList')->with('message', 'Employee updated successfully');
    } 

    public function employeeDelete($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employeeList')->with('message', 'Employee deleted successfully');
    } 
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class EmployeeController extends Controller
{
    //
    public function addEmployee(){
        return view('admin.Employee.add-employee');
    }
 
}

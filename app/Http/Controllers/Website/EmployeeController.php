<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function Return_Register_Career_Info(){
        return view('Website.EmployeeCompleteRegister.skills_info');
    }
    public function Return_Register_General_Info(){
        return view('Website.EmployeeCompleteRegister.general_info');
    }
}

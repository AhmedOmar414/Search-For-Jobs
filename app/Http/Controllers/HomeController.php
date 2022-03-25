<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //
    public function Return_Complete_Register()
    {
        if (auth()->user()->is_employer == 0){
            return Redirect('Employee/CompleteRegister/career');
        }else{
            return "you are employer";
        }
    }
}

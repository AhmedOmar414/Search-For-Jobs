<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\EmployeeController;
use App\Http\Controllers\Website\EmployerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/CompleteRegister', [HomeController::class, 'Return_Complete_Register'])->name('complete_register');

    Route::prefix('Employee/')->group(function (){
        Route::get('career',[EmployeeController::class,'Return_Register_Career_Info'])->name('complete_register.career');
        Route::get('general',[EmployeeController::class,'Return_Register_General_Info'])->name('complete_register.general');
    });

    Route::prefix('Employer/')->group(function (){
        Route::prefix('CompleteRegister/')->get('general',[EmployerController::class,'Return_Register_General_Info'])->name('complete_register.general_info');
    });
});




////Route::get('/employer',function (){
////    return 'welcome';
////})->middleware('checktype');
////
//////for testing
//Route::get('/dot', function () {
//    return view('Website.employee_complete_reg');
//});
//Route::get('/admin', function () {
//    return view('Dashboard.dashboard');
//});
//Route::get('/general', function () {
//    return view('Website.general_info');
//});



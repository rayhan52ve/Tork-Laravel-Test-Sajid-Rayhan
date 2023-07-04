<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Auth
Route::match(['get','post'],'userlogin',[UserController::class,'login'])->name('login');
Route::match(['get','post'],'register',[UserController::class,'register'])->name('register');


Route::group(['middleware' => ['auth']],function(){

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('logout', [UserController::class,'logout'])->name('logout');

Route::resource('user-info',UserInfoController::class);

});
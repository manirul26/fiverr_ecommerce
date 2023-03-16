<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Admindashboardcontroller;
use App\Http\Controllers\admin\UserController;

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
//Route::get('dashboard', 'admin\DashboardController@dashboard');
Route::get('dashboard',[Admindashboardcontroller::class, 'dashboard']);
Route::get('CreateUser',[UserController::class, 'CreateUser']);
//Route::post('customRegistration',[UserController::class, 'customRegistration']);
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom'); 

Route::get('Userlist',[UserController::class, 'Userlist']);
Route::get('Addrole',[UserController::class, 'Addrole']);

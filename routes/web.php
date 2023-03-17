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
Route::get('dashboard',[Admindashboardcontroller::class, 'dashboard'])->name('admin.dashboard');
Route::get('CreateUser',[UserController::class, 'CreateUser'])->name('admin.CreateUser');
//Route::post('customRegistration',[UserController::class, 'customRegistration']);
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom'); 
Route::post('add-roles', [UserController::class, 'addRoles'])->name('roles.add'); 
Route::post('delete-roles', [UserController::class, 'deleteRoles'])->name('roles.delete'); 
Route::post('delete-users', [UserController::class, 'deleteUsers'])->name('users.delete'); 
Route::get('Userlist',[UserController::class, 'Userlist'])->name('Userlist');
Route::get('Addrole',[UserController::class, 'Addrole'])->name('Addrole');
Route::get('Addroleedit/{id}/edit',[UserController::class, 'Addroleedit']);
Route::get('Rolelist',[UserController::class, 'Rolelist'])->name('Rolelist');
Route::get('Settingpage',[UserController::class, 'Settingpage'])->name('admin.Settingpage');

//edit user
Route::get('Edituser/{id}/edit',[UserController::class, 'Edituser'])->name('Edituser');
Route::post('Edituser/{id}/edit',[UserController::class, 'updateUser']);

//Route::get('student/edit-blog/{id}', 'Student\BlogController@edit')->name('student.editBlog');
//Route::post('student/edit-blog/{id}', 'Student\BlogController@update');



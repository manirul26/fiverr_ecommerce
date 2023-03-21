<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Admindashboardcontroller;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\Ordercontroller;



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


//Route::get('dashboard', 'admin\DashboardController@dashboard');
Route::get('admin',[UserController::class, 'adminlogin'])->name('admin.login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

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

//Brand
Route::get('/admin/brand/brandlist', [BrandController::class, 'index'])->name('indexBrand');
Route::get('/admin/brand/add', [BrandController::class, 'indexAddBrand'])->name('indexAddBrand');
Route::post('admin/brand/store', [BrandController::class, 'storeBrand'])->name('storeBrand');
Route::get('admin/brand/edit/{id}',[BrandController::class,'EditBrand']);
//Route::post('admin/brand/update', [BrandController::class,'updateBrand'])->name('updateBrand');
Route::get('/admin/brand/delete/{id}', [BrandController::class,'brandDelete'])->name('deleteBrand');
Route::post('delete-brand', [BrandController::class, 'deleteBrand'])->name('brand.delete'); 
Route::post('getid-brand', [BrandController::class, 'edit'])->name('brand.getbrandid'); 
Route::post('getid-brandupdate', [BrandController::class, 'Updatebrand'])->name('admin.brandedit');
//Route::get('admin/brand/edit/{id}',[BrandController::class,'edit']);

//addproduct

Route::get('/admin/productlist',[ProductController::class, 'index'])->name('admin.productlist');
Route::get('/admin/addproduct',[ProductController::class, 'add'])->name('admin.addproductpage');
Route::post('admin/addproduct/store', [ProductController::class, 'storeProduct'])->name('admin.addproduct');


//inventory

Route::get('/admin/stocklist',[ProductController::class, 'stocklist'])->name('admin.stocklist');
Route::get('/admin/addstock',[ProductController::class, 'addstock'])->name('admin.addstock');
Route::post('admin/addstock/store', [ProductController::class, 'storeStock'])->name('admin.stockStore');
Route::get('admin/adstockedit/{id}/edit',[ProductController::class, 'Addstockedit']);
//Route::post('admin/adstockedit/{id}/edit',[ProductController::class, 'updateStock']);
Route::post('admin/adstockedit/update', [ProductController::class,'updateStock'])->name('updateStock');




//order
Route::get('/admin/orderlist',[Ordercontroller::class, 'orderlist'])->name('admin.orderlist');


// UserData update
Route::get('UserEdit/{id}/{edit}',[UserController::class, 'UserEdit']);

Route::post("updatePassword",[UserController::class,'updatePassword'])->name('updatePassword');
Route::post("updateProfile",[UserController::class,'updateProfile'])->name('updateProfile');
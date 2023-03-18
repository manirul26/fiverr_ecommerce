<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admindashboardcontroller extends Controller
{
    //
    public function dashboard(){
        if(Auth::check()){
            return view('Admin.Dashboard.index');
        }
  
        return redirect("admin")->withSuccess('You are not allowed to access');
       
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function CreateUser(){
        return view('Admin.Users.Create');
    }
    public function Userlist(){
        return view('Admin.Users.Userlist');
    }
    public function Addrole(){
        return view('Admin.Users.Addrole');
    }
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phoneno' => 'required',
            'password' => 'required|min:6'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         echo §check;
       // return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phoneno' => $data['phoneno'],
        'password' => Hash::make($data['password'])
      ]);
    }    

}

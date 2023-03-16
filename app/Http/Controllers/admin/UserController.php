<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

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
    public function Rolelist()
    {
        return view('Admin.Users.Rolelist');
    }
    public function Settingpage()
    {
        return view('Admin.Users.Setting');
    }
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phoneno' => 'required',
            'roleid' => 'required'

        ]); 
           
        $data = $request->all();
       $check = $this->create($data);
       //  echo §check;
       return redirect("Userlist")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phoneno' => $data['phoneno'],
        'roleid' => $data['roleid'],
        'password' => Hash::make($data['password'])
      ]);
    }    

}

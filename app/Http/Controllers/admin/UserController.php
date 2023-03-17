<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Addroles;
use Hash;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function CreateUser(){
        $query = Addroles::latest()->get();
        return view('Admin.Users.Create')->with([
            'query' => $query
        ]);
    }
    public function Userlist(){
        $query = DB::table('users')
        ->select('users.id','users.name','addroles.rolesname','users.email')
        ->join('addroles', 'addroles.id', '=', 'users.roleid')
        ->get();
        return view('Admin.Users.Userlist')->with([
            'query' => $query
        ]);
    }
    public function Addrole(){
        return view('Admin.Users.Addrole');
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
    
    public function addRoles(Request $request)
    {
        $input = $request->all();
        $input['rolesname'] = $request->input('rolesname');
        $input['modulename'] = implode(',', (array) $request->input('modulename'));
        $input['managmentpower'] = $request->input('input_radio_1');
        $input['teamstats'] = $request->input('teamstats');
        $input['followtheteam'] = $request->input('followtheteam');
        $input['created_at'] = date('Y-m-d');        
        $input['updated_at'] = date('Y-m-d');   
        Addroles::create($input);
        return redirect()->route("Rolelist")->with('message','Data added Successfully');

    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneno' => 'required',

            'roleid' => 'required'
        ]);

        $query = User::where('id', $id)->findOrFail($id);
        $query->name = $request->name;
        $query->email = $request->email;
        $query->roleid = $request->roleid;
        $query->phoneno = $request->phoneno;

        if($query->save()){
            return redirect()->route("Userlist")->with('success','updated successfully.');
        }
        return redirect()->back()->with('error', 'Something wrong!');
    }
    public function Edituser($id)
    {
        $query = User::where('id',$id)->get();
        $query = DB::table('users')
        ->select('users.id','users.name','addroles.rolesname','users.email','users.phoneno','users.roleid')
        ->join('addroles', 'addroles.id', '=', 'users.roleid')
        ->where('users.id',$id)
        ->get();
        $roles = DB::table('addroles')->latest()->get();
        return view('Admin.Users.Edituser')->with([
            'query' => $query,
            'roles' => $roles
        ]);
    } 
    public function Addroleedit($id)
    {
        $query = DB::table('addroles')->where('id',$id)->get();
        return view('Admin.Users.Addroleedit')->with([
            'query' => $query
        ]);
    }
    public function Rolelist()
    {
        $query = DB::table('addroles')->latest()->get();
        return view('Admin.Users.Rolelist')->with([
            'query' => $query
        ]);
    }
    public function deleteRoles(Request $request)
    {
        $id = Addroles::find($request->emp_id)->delete();
        if($id > 0)
        {
            echo "delete";
        }
        else
        {
            echo "failed";

        }
    }
    //delete user
    
    public function deleteUsers(Request $request)
    {
        $id = $request->ids;

            $id = User::whereIn('id',$id)->delete();

            if($id > 0)
            {
                echo "delete";
            }
            else
            {
                echo "failed";
    
            }
       
    }
   
}

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
use App\Rules\MatchOldPassword;
//php artisan make:rule MatchOldPassword

class UserController extends Controller
{
    //
    public function adminlogin(){
       // echo "ddd";
        return view('Admin.Users.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin")->with('success','Login details are not valid');
    }
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin');
    }
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

    public function UserEdit($id){
        
        $query = DB::table('users')->where('id', $id)->first();

        return view('Admin.Users.Setting')->with([
            'query' => $query
        ]);
        

    }

    public function Addrole(){
        return view('Admin.Users.Addrole');
    }
    public function updateProfile(Request $request)
    {
        echo $request->profile_input_file;


        if($request->profile_input_file == "")
            {
                $data = array(
                    'name' => $request->name
                );
                $id = DB::table('users')->where('id',auth()->id())->update($data);
                if( $id > 0)
                {

                    return redirect()->back()->with("success","Profile name update successfully");

                }
                else
                {

                    return redirect()->back()->with("success","Failed to update password"); 
                }
            }
            else
            {
                $file =$request->file('profile_input_file');
                $ext =$file->getClientOriginalExtension();
                $profileimage =time().'.'.$ext; 
                $file->move('upload/profile',$profileimage);
                  $data = array(
                  'image' => $profileimage,
                  'name' => $request->name
                  );
                  $id = DB::table('users')->where('id',auth()->id())->update($data);
                  if($id > 0)
                  {
                      return redirect()->route("admin.Settingpage")->with('success','Image update Successfully');
                  }
                  else
                  {
                   

                    return redirect()->route("admin.Settingpage")->with('success','failed to update');
                  }
            }

    }
    public function updatePassword(Request $request)
    {
            if (!(Hash::check($request->current_password, Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Your current password does not matches with the password.");
            }
            if(strcmp($request->current_password, $request->new_password) == 0){
                // Current password and new password same
                return redirect()->back()->with("error","New Password cannot be same as your current password.");
            }
            if($request->new_password == "" || $request->current_password == "")
            {
                return redirect()->back()->with("success","insert the required Fields");
            }
            else
            {
                $data = array(
                    'password' => Hash::make($request->new_password)
                );
                $id = DB::table('users')->where('id',auth()->id())->update($data);
                if( $id > 0)
                {
                 

                    return redirect()->back()->with("success","Password successfully changed!");

                }
                else
                {
                 

                    return redirect()->back()->with("success","Failed to update password"); 
                }

            }
               
            
               

    }
    public function Settingpage()
    {
        if(Auth::check()){
            $query = DB::table('users')->where('id', auth()->id())->get();
            return view('Admin.Users.Setting')->with([
                'query' => $query
            ]);

        }
  
        return redirect("admin")->withSuccess('You are not allowed to access');
       
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
        $allmodule = DB::table('modules')->get();
        $query = DB::table('addroles')->where('id',$id)->get();
      //  print_r($allmodule);

       // exit;
        return view('Admin.Users.Addroleedit')->with([
            'query' => $query,
            'allmodule' => $allmodule
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

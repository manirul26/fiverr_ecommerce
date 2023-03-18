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
    public function updatePassword(Request $request)
    {
        try{
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);
       
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
            return redirect("Settingpage")->withSuccess('Update Successfully');
          //  dd('Password change successfully.');

/*             $request->validate([
                'current_password'=>['required','string','min:8'],
                'new_password'=>  ['required','string','min:8','confirmed']
            ]);
            $userInfo = DB::table('users')->where('id',auth()->id())->first();
            dd($userInfo);
            if($userInfo){
                $oldPassword = Hash::make($request->current_password);
                if(Hash::check( $request->input('old-password'), $userInfo->password) && $request->input('password') === $request->input('confirm-password')){
                    DB::table('users')->where('email', $userInfo->email)
                        ->update(['password' => Hash::make($request->input('password'))]);

                    return redirect('admin/dashboard');
                }
                else{
                    return Redirect::back()->withErrors(['updatePasswordError' => 'Password does not match.']);
                }
            } */
        }catch(Exception $e){
            return $e;
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

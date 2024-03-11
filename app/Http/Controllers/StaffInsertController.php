<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class StaffInsertController extends Controller
{
    public function staffinsertform(){
        return view('admin.register_staff');
        }
    public function staffinsert(Request $request){
        //insert into User table 
    

        //$user = User::create([
            //'name' => $request->first_name,
            //'email' => $request->email,
            //'role' => $request->role,
            //'password' => Hash::make($request->password),
        //]);
        //event(new Registered($user));

        //insert into Student table
        $id= $request->input('ID');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $role = $request->input('role');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $data=array('ID'=>$id,'Fname'=>$first_name,"Lname"=>$last_name, "role"=>$role);
        DB::table('staff')->insert($data);

        $data2=array('name'=>$first_name,"email"=>$email, "role"=>$role, "password"=>$password);
        DB::table('users')->insert($data2);
        
        return redirect()->back() ->with('alert', 'Record inserted successfully!');
        //return redirect()->back()->with('alert', 'Record inserted successfully!');
        //return back();
        }
}

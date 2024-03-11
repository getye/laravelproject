<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthManager extends Controller
{
    function login(){
        return view('login');
        }

    function registration(){
        return view('registration');
        }

    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){  //not working
                return redirect()->intended(route('home'));
            } 
        return redirect(route('login'))->with("error", "error to login");
        }

    function registrationPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        //$data['name']=$request->name;
        //$data['email']=$request->email;
        //$data['password']=Hash::make($request->password);
        //$user = User::create($data);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $data=array('name'=>$name,"email"=>$email, "password"=>$password);
        DB::table('users')->insert($data);

        if(!$data){
             return redirect(route('registration'))->with("error", "Registration error");
           }
        return redirect(route('login'))->with("success", "successfull registration");
        }
    function logout(){
            Session::flush();
            Auth::logout();
            return rediract(route('login'));
        }
}
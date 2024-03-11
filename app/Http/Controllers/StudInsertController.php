<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\fresh1;
use App\Models\student;

use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class StudInsertController extends Controller
{
    //
    function freshman(){return view('freshman');}
    public function studinsertform(){return view("registrar.register_student");}
    public function studinsert(Request $request){

        //insert into User table 
    
        /*$user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'role' => "Student",
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user)); */
        //insert into Student table
        $id= $request->input('ID');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $grade = $request->input('Grade');
        $section = $request->input('Section');
        $role = 'Student';
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $data=array('ID'=>$id,'Fname'=>$first_name,"Lname"=>$last_name,"Grade"=>$grade,"Section"=>$section);
        DB::table('student')->insert($data);
        $data2=array('name'=>$first_name,"email"=>$email, "role"=>$role, "password"=>$password);
        DB::table('users')->insert($data2);
        
        return redirect()->back() ->with('alert', 'Record inserted successfully!');
        //return redirect()->back()->with('alert', 'Record inserted successfully!');
        //return back();
    }
            function fpost(Request $request ){
                $data= $request->validate([ 
                    'fname' => 'required',
                    'lname' => 'required',
                    'sex' => 'required',
                    'status' => 'required',
                    'program' => 'required',
                    'department' => 'required', 
                    'email' => 'required',
                    'phone' => 'required',
                    'cv' => 'required',]);
                 $user1=student::create($data);
                 if(!$user1){
                    return redirect(route('login'))->with('error',"not registered");
                 }
                      return redirect(route('freshman.post'))->with('success',"registerd");

        }
    }

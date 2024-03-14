<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\staff;

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
        public function notice(){
            return view('teacher.notice');
            }
            public function tnotice(Request $request){
            }
    public function staffinsert(Request $request){

        /*
        $data= $request->validate([ 
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => Hash::make($request->last_name),
         ]);
         $user=User::create($data);
         $data1= $request->validate([ 
            'ID' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'rank' => 'required',
            'phone' => 'required',
            'photo' => 'required',
         ]);
         $user=staff::create($data1);
                */
       
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
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $gender = $request->input('gender');
        $rank = $request->input('rank');
        $phone = $request->input('phone');
        $role = $request->input('role');
        $email = $request->input('email');
        $photo = $request->input('file');
        $password = Hash::make($request->input('last_name'));
        
       


        //$data1 = new staff();

        $file = $request -> file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
            /*
        $data1->ID=$id;
        $data1->Fname=$first_name;
        $data1->Mname=$middle_name;
        $data1->Lname=$last_name;
        $data1->Gender=$gender;
        $data1->AcRank=$rank;
        $data1->Phone=$phone;
        $data1->Profile=$filename;

        $data1->save();

        $data2 = new User();
        $password = Hash::make($request->input('last_name'));
        $data2->name=$first_name;
        $data2->email=$email;
        $data2->role=$role;
        $data2->name=$password;

        $data2->save();
        */
        
        $data=array('ID'=>$id,'Fname'=>$first_name,"Mname"=>$middle_name,"Lname"=>$last_name, "Gender"=>$gender,
        "AcRank"=>$rank, "Role"=>$role, "Phone"=>$phone, "Email"=>$email, "Profile"=>$filename);
        DB::table('staff')->insert($data);

        $data2=array('name'=>$first_name,"email"=>$email, "role"=>$role, "password"=>$password);
        DB::table('users')->insert($data2);
        
        return redirect()->back() ->with('alert', 'Record inserted successfully!');
        //return redirect()->back()->with('alert', 'Record inserted successfully!');
        //return back();
        
        }


    public function show(){
        $data = staff::all();
    
        return view('Admin.view_staff_profile', compact('data'));
             }
    
    public function download($file){
         return response()->download(public_path('assets/'.$file));
                 }
    public function view($id){
        $viewdata=staff::find($id);
        
        return view('Admin.staff_profile',compact('viewdata'));
                 }
}

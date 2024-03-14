<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\fresh;
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
                    $cv = $request -> cv;
                    $filename = time().'.'.$cv->getClientOriginalExtension();
                    $request->cv->move('assets',$filename);
                    $data1 = new fresh();
                    $data1->fname=$request -> fname;
                    $data1->lname=$request -> lname;
                    $data1->sex=$request -> sex;
                    $data1->status=$request -> status;
                    $data1->program=$request -> program;
                    $data1->department=$request -> department;
                    $data1->email=$request -> email;
                    $data1->phone=$request -> phone;
                    $data1->cv=$filename;
                    $data1->save();
                    return redirect()->back() ->with('alert', 'Record inserted successfully!');

        }

        public function show(){
            $status = "Pending";
            $data= DB::select('select * from freshman where approval = :status', ['status' => $status]);
            return view('registrar.fresh_request', compact('data'));
                 }
        
        public function download($file){
             return response()->download(public_path('assets/'.$file));
                     }
        public function view($id){
            $viewdata=fresh::find($id);
            
            return view('Admin.staff_profile',compact('viewdata'));
                     }
        
        public function accept_fresh($id) {
            $approval = "Accepted";
            DB::update('update freshman set approval = ? where id = ?',[$approval,$id]);
            return redirect()->back() ->with('alert', 'Request Accepted!');
                                 }
        public function reject_fresh($id){
            $approval = "Rejected";
            DB::update('update freshman set approval = ? where id = ?',[$approval,$id]);
            return redirect()->back() ->with('alert', 'Request Rejected!');
                                 }

        public function view_fresh_approval(){
            $data = fresh::all();
            return view('view_approval', compact('data'));
                              }
        public function search(Request $request){
            $name = $request -> search;
            $data= DB::select('select * from freshman where fname = :name', ['name' => $name]);
            return view('view_approval', compact('data'));
                            }
                             
    }

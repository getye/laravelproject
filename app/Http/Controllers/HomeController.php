<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='Teacher')
        {
            return view('teacher.teacherhome');
        }
        if($role=='Admin')
         {
            return view('admin.adminhome');
         }

        if($role=='Registrar')
        {
            return view('registrar.registrarhome');
        }
       
        else
        {
            return view('student.studenthome');
        }
    }
}

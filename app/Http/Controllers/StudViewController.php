<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class StudViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from freshman');
        return view('stud_view',['users'=>$users]);
        }
}
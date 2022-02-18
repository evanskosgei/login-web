<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Admin extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function display(){

        $users = DB::select('select * from saves');
        return view('admin.index',['users'=>$users]);
    }
}

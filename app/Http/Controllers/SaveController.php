<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\save;

class SaveController extends Controller
{
    public function index(){
        return view('login');
    }

    public function saveCredentials(Request $request){
        $save = new Save;
        $save->name = $request->name;
        $save->password = $request->password;
        $save->save();
        return redirect('/dashboard');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }


}

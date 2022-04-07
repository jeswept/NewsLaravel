<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SignupController extends Controller
{
    //

    public function index(Request $req)
    {
        return view('auth.login');
    }
    
    public function save(Request $req)
    {
        $validated = $req->validate([

            'name'=>'required|alpha',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]); 
        
        $user = new User();
        $user-> insert($validated);
        
        return redirect('login');
    }
}

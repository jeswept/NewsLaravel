<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index(Request $req)
    {
        return view('view');
    }
    
    public function save(Request $req)
    {
        $validate = $req->validate([
            'key'=>'required|string',
            'key'=>'required|image'
        ]);
        return view('view');
    }
}

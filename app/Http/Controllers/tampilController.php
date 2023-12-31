<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilController extends Controller
{
    public function login(){
        return view('login');
    }

    public function homeindexadmin(){
        return view('home.indexadmin.indexadmin');
    }
}

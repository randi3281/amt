<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilController extends Controller
{
    public function login(){
        return view('login');
    }

    public function homeindex(){
        return view('home.indexdosen.index');
    }

    public function tugas(){
        return view('home.indexdosen.index');
    }
}

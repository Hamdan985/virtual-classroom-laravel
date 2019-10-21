<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }

    public function studentLogin(){

        return view('pages.studentLogin');
    }

    public function studentRegister(){

        return view('pages.studentRegister');
    }
}

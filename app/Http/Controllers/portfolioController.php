<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function abouts(){
        return view('pages.aboutMe');
    }
}

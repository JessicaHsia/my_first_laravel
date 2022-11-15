<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSet extends Controller
{
    public function index(){
        return view('jessicahsia2022');
    }

    public function weather(){
        return view('weathermap-second');
    }

    public function game(){
        return view('colorgame');
    }

    public function bmi(){
        return view('bmi');
    }

    public function microsoftIndex(){
        return view('microsorf');
    }

}

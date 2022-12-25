<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class WorksPage extends Controller
{
    public function weather(){
        return view('works.weathermap-second');
    }

    public function game(){
        return view('works.colorgame');
    }

    public function bmi(){
        return view('works.bmi');
    }

    public function microsoftIndex(){
        return view('works.microsorf');
    }

    public function card(){
        return view('works.mooncard');
    }

    public function calculator(){
        return view('works.calculator');
    }
}

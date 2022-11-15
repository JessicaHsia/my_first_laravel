<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class PageSet extends Controller
{
    public function index(){

        $data = DB::table('works')->get();
        $data1 = DB::table('works')->orderby('id','desc')->get();//抓最新三筆
        $data2 = DB::table('works')->take(3)->get();//抓最舊三筆
        $data3 = DB::table('works')->inRandomOrder()->take(3)->get();//隨機抓三筆
        //skip()跳過幾筆
        //take()抓幾筆
        //ordering排序: orderBy('colunm','升序asc or 降序desc')
        //random ordering:

        // dd($data);
        return view('jessicahsia2022',compact('data'));
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

    public function card(){
        return view('mooncard');
    }

}

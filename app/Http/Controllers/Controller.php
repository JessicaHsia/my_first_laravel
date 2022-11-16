<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class Controller extends BaseController
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

    public function comment(){

        $comments = DB::table('comments')->orderby('id', 'desc')->get();
        return view('comment.comment', compact('comments'));
    }

    public function save_comment(Request $reques){
        // save_comment(接收傳過來的資料)
        //Laravel -> Insert statement
        DB::table('comments')->insert([
            'page_name' => $reques->page_name,
            'image' => $reques->image,
            'title' => $reques->title,
            'github_url' => $reques->github_url,
        ]);

        //重新導向原本頁面
        return redirect('/comment');
        // dd($reques->all());
        // all() 印出接收過來的資料
    }

}

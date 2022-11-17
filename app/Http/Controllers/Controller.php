<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Comment;

class Controller extends BaseController
{

    public function index()
    {

        $data = DB::table('works')->get();
        $data1 = DB::table('works')->orderby('id', 'desc')->get(); //抓最新三筆
        $data2 = DB::table('works')->take(3)->get(); //抓最舊三筆
        $data3 = DB::table('works')->inRandomOrder()->take(3)->get(); //隨機抓三筆
        //skip()跳過幾筆
        //take()抓幾筆
        //ordering排序: orderBy('colunm','升序asc or 降序desc')
        //random ordering:

        // dd($data);
        return view('jessicahsia2022', compact('data'));
    }

    public function comment()
    {
        //DB直接存取，使用orderby將最新的排序到最前面後，取出所有資料
        // $comments = DB::table('comments')->orderby('id', 'desc')->get();

        //Models讀取
        $comments = Comment::orderby('id', 'desc')->get();

        return view('comment.comment', compact('comments'));
    }

    public function save_comment(Request $reques)
    {
        // save_comment(接收傳過來的資料)
        //Laravel -> Insert statement

        //DB直接操作
        // DB::table('comments')->insert([
        //     'page_name' => $reques->page_name,
        //     'image' => $reques->image,
        //     'title' => $reques->title,
        //     'github_url' => $reques->github_url,
        // ]);

        //Models操作
        Comment::create([
            'page_name' => $reques->page_name,
            'image' => $reques->image,
            'title' => $reques->title,
            'github_url' => $reques->github_url,
        ]);

        //寫法
        // $data = [
        //     'page_name' => $reques->page_name,
        //     'image' => $reques->image,
        //     'title' => $reques->title,
        //     'github_url' => $reques->github_url,
        // ];
        // Comment::create($data);
        //寫法
        // Comment::create($reques->all());

        //重新導向原本頁面
        return redirect('/comment');
        // dd($reques->all());
        // all() 印出接收過來的資料
    }

    public function delete_comment($id)
    {
        //DB操作
        // DB::table('comments')->where('id', $id)->delete();

        //Models操作
        Comment::where('id', $id)->delete();
        return redirect('/comment');
    } 

    public function edit_comment($id)
    {
        //DB操作
        // $comment = DB::table('comments')->where('id', $id)->first(); //從符合條件的筆數中，抓第一筆（結果會是單個，不會是陣列）
        // $comment = DB::table('comments')->find($id); //直接去找match的ID

        //Models操作
        $comment = Comment::find($id);
        return view('comment.edit', compact('comment'));
    }

    public function update_comment($id, Request $reques)
    {
        //DB操作 注意只能用where
        // DB::table('comments')->where('id', $id)->update([
        //     'page_name' => $reques->page_name,
        //     'image' => $reques->image,
        //     'title' => $reques->title,
        //     'github_url' => $reques->github_url,
        // ]);

        //Models操作
        Comment::where('id', $id)->update([
            'page_name' => $reques->page_name,
            'image' => $reques->image,
            'title' => $reques->title,
            'github_url' => $reques->github_url,
        ]);

        return redirect('/comment');
    }
}

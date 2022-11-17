<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';  //使用資料庫表單名稱 database -> migration -> teble name.

    protected $primaryKey = 'id'; //資料表的主key 通常會有索引的角色（不可重複，會自動累加的特性）

    //model可以使用黑名單 或 白名單（二選一） 去設定可填寫的欄位
    protected $fillable = ['page_name','title','image','github_url']; //整張表格只有name可以被填寫
    // protected $guard = ['id', 'created_at', 'updated_at']; //除了左邊三個以外 其他都可以被填寫


}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksPage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BannerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);
Route::get('/weather', [WorksPage::class, 'weather']);
Route::get('/color', [WorksPage::class, 'game']);
Route::get('/bmi', [WorksPage::class, 'bmi']);
Route::get('/microsoft', [WorksPage::class, 'microsoftIndex']);
Route::get('/card', [WorksPage::class, 'card']);

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);



Route::prefix('/banner')-> group(function(){ //Banner管理相關路由
    Route::get('/', [BannerController::class, 'index']);//總表,列表頁
    Route::get('/create', [BannerController::class, 'create']);//新增頁面
    Route::post('/store', [BannerController::class, 'store']);//儲存
    Route::get('/edit/{id}', [BannerController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']);//更新
    Route::post('/delete/{id}', [BannerController::class, 'delete']);//刪除
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

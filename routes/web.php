<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksPage;
use App\Http\Controllers\Controller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageSet;

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

Route::get('/', [PageSet::class, 'index']);
Route::get('/weather-map', [PageSet::class, 'weather']);
Route::get('/colorgame', [PageSet::class, 'game']);
Route::get('/bmi-test', [PageSet::class, 'bmi']);
Route::get('/microsoft-index', [PageSet::class, 'microsoftIndex']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

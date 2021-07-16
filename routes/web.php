<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucTruyenController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterControler;

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

Route::get('/', function () {
    return view('layout');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('/danhmuc', DanhmucTruyenController::class);

Route::resource('/truyen', TruyenController::class);

Route::resource('/chapter', ChapterControler::class);





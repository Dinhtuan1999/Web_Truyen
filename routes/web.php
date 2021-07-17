<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucTruyenController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class,'home']);
Route::get('/danh-muc/{slug}', [IndexController::class,'doctruyen']);
//Route::get('//{{slug}}', [IndexController::class,'danhmuc']);
Route::get('/xem-truyen/{id}', [IndexController::class,'xemtruyen'])->name('xem-truyen');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('/danhmuc', DanhmucTruyenController::class);

Route::resource('/truyen', TruyenController::class);

Route::resource('/chapter', ChapterController::class);





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesertaController;
use App\Http\Controllers\KirimEmailController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Get('home',[pesertaController::class, 'show']);
Route::get('edit/{id}',[pesertaController::Class,'showData']);
Route::post('edit',[pesertaController::Class,'update']);

//sending email routes
Route::get('/kirim_email',[KirimEmailController::class,'index']);
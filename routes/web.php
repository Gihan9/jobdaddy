<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('jd.home.main');
});



Auth::routes();


Route::get('/jd/profile', [App\Http\Controllers\jobseekerfrontController::class, 'personaldata']);
Route::post('/edit', [App\Http\Controllers\jobseekerfrontController::class, 'updatepersonaldata']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

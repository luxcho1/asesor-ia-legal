<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//navbar
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chatbot', function () {return view('chatbot');});
Route::get('/nosotros', function () {return view('nosotros');});
Route::get('/trabaja-con-nosotros', function () {return view('trabaja-con-nosotros');});

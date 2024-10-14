<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbogadoController;

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

//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');;
Route::resource('abogados', AbogadoController::class);


//navbar
Route::get('/chatbot', function () {return view('navbar.chatbot');});
Route::get('/nosotros', function () {return view('navbar.nosotros');});
Route::get('/trabaja-con-nosotros', function () {return view('navbar.trabaja_con_nosotros');});
Route::get('/contacto', function () {return view('navbar.contacto');});

//Abogado
Route::get('/dashboard-abogado', function () {return view('abogado.dashboard');})->name('abogado.dashboard');

//Recomendacion de abogados
Route::get('/recomendacion/{especialidad}', [AbogadoController::class, 'filtrarPorEspecialidad'])
    ->name('recomendacion.especialidad');
    
//Chatbots
Route::get('/chatbot/central', function () {return view('chatbot.central');});
Route::get('/chatbot/civil', function () {return view('chatbot.civil');});
Route::get('/chatbot/economica', function () {return view('chatbot.economica');});
Route::get('/chatbot/familiar', function () {return view('chatbot.familiar');});
Route::get('/chatbot/laboral', function () {return view('chatbot.laboral');});
Route::get('/chatbot/penal', function () {return view('chatbot.penal');});
Route::get('/chatbot/tributaria', function () {return view('chatbot.tributaria');});
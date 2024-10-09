<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotFamiliarController;
use App\Http\Controllers\ChatbotCivilController;
use App\Http\Controllers\ChatbotEconomicoController;
use App\Http\Controllers\ChatbotLaboralController;
use App\Http\Controllers\ChatbotPenalController;
use App\Http\Controllers\ChatbotTributarioController;
use App\Http\Controllers\ChatbotCentralController;

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

//navbar
Route::get('/chatbot', function () {return view('navbar.chatbot');});
Route::get('/nosotros', function () {return view('navbar.nosotros');});
Route::get('/trabaja-con-nosotros', function () {return view('navbar.trabaja_con_nosotros');});
Route::get('/contacto', function () {return view('navbar.contacto');});

//Abogado
Route::get('/dashboard-abogado', function () {return view('abogado.dashboard');})->name('abogado.dashboard');

//Recomendacion de abogados
Route::get('/recomendacion/civil', function () {return view('recomendacion-abogado.civil');});

//Chatbot Central
Route::get('/chatbot/central', function () {return view('chatbot.central');});
Route::post('/chatbot/central', [ChatbotCentralController::class, 'submit'])->name('chatbot.central');

//Chatbot Civil
Route::get('/chatbot/civil', function () {return view('chatbot.civil');});
Route::post('/chatbot/civil', [ChatbotCivilController::class, 'submit'])->name('chatbot.civil');

//Chatbot Economica
Route::get('/chatbot/economica', function () {return view('chatbot.economica');});
Route::post('/chatbot/economica', [ChatbotEconomicoController::class, 'submit'])->name('chatbot.economica');

//Chatbot Familiar
Route::get('/chatbot/familiar', function () {return view('chatbot.familiar');});
Route::post('/chatbot/familiar', [ChatbotFamiliarController::class, 'submit'])->name('chatbot.familiar');

//Chatbot Laboral
Route::get('/chatbot/laboral', function () {return view('chatbot.laboral');});
Route::post('/chatbot/laboral', [ChatbotLaboralController::class, 'submit'])->name('chatbot.laboral');

//Chatbot Penal
Route::get('/chatbot/penal', function () {return view('chatbot.penal');});
Route::post('/chatbot/penal', [ChatbotPenalController::class, 'submit'])->name('chatbot.penal');

//Chatbot Tributario
Route::get('/chatbot/tributaria', function () {return view('chatbot.tributaria');});
Route::post('/chatbot/tributaria', [ChatbotTributarioController::class, 'submit'])->name('chatbot.tributaria');
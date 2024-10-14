<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotFamiliarController;
use App\Http\Controllers\ChatbotCivilController;
use App\Http\Controllers\ChatbotEconomicoController;
use App\Http\Controllers\ChatbotLaboralController;
use App\Http\Controllers\ChatbotPenalController;
use App\Http\Controllers\ChatbotTributarioController;
use App\Http\Controllers\ChatbotCentralController;
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
Route::get('/recomendacion/civil', function () {return view('recomendacion-abogado.civil');});
Route::get('/recomendacion/economica', function () {return view('recomendacion-abogado.economica');});
Route::get('/recomendacion/familiar', function () {return view('recomendacion-abogado.familiar');});
Route::get('/recomendacion/laboral', function () {return view('recomendacion-abogado.laboral');});
Route::get('/recomendacion/penal', function () {return view('recomendacion-abogado.penal');});
Route::get('/recomendacion/tributaria', function () {return view('recomendacion-abogado.tributaria');});

//Chatbot Central
Route::get('/recomendacion/{especialidad}', [AbogadoController::class, 'filtrarPorEspecialidad'])
    ->name('recomendacion.especialidad');
    
//Chatbots
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

Route::get('/test-openai', function () {
    return response()->json([
        'api_key' => env('OPENAI_API_KEY'), // Esto debería devolver tu clave
        'config' => config('openai.api_key'), // Esto debería devolver la misma clave
    ]);
});

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

Route::get('/recomendacion/{especialidad}', [AbogadoController::class, 'filtrarPorEspecialidad'])
    ->name('recomendacion.especialidad');

//Recomendacion de abogados
Route::get('/recomendacion/civil', function () {return view('recomendacion-abogado.civil');});
Route::get('/recomendacion/economica', function () {return view('recomendacion-abogado.economica');});
Route::get('/recomendacion/familiar', function () {return view('recomendacion-abogado.familiar');});
Route::get('/recomendacion/laboral', function () {return view('recomendacion-abogado.laboral');});
Route::get('/recomendacion/penal', function () {return view('recomendacion-abogado.penal');});
Route::get('/recomendacion/tributaria', function () {return view('recomendacion-abogado.tributaria');});

    
//Chatbots
Route::get('/chatbot/central', [ChatbotCentralController::class, 'showCentralChatbot'])->name('chatbot.central');
Route::post('/chatbot/central/ajax', [ChatbotCentralController::class, 'ajaxSubmit'])->name('chatbot.central.ajax');

//Chatbot Civil
Route::get('/chatbot/civil', [ChatbotCivilController::class, 'showCivilChatbot'])->name('chatbot.civil');
Route::post('/chatbot/civil/ajax', [ChatbotCivilController::class, 'ajaxSubmit'])->name('chatbot.civil.ajax');

//Chatbot Economica
Route::get('/chatbot/economica', [ChatbotEconomicoController::class, 'showEconomicaChatbot'])->name('chatbot.economica');
Route::post('/chatbot/economica/ajax', [ChatbotEconomicoController::class, 'ajaxSubmit'])->name('chatbot.economica.ajax');

//Chatbot Familiar
Route::get('/chatbot/familiar', [ChatbotFamiliarController::class, 'showFamiliarChatbot'])->name('chatbot.familiar');
Route::post('/chatbot/familiar/ajax', [ChatbotFamiliarController::class, 'ajaxSubmit'])->name('chatbot.familiar.ajax');

//Chatbot Laboral
Route::get('/chatbot/laboral', [ChatbotLaboralController::class, 'showLaboralChatbot'])->name('chatbot.laboral');
Route::post('/chatbot/laboral/ajax', [ChatbotLaboralController::class, 'ajaxSubmit'])->name('chatbot.laboral.ajax');

//Chatbot Penal
Route::get('/chatbot/penal', [ChatbotPenalController::class, 'showPenalChatbot'])->name('chatbot.penal');
Route::post('/chatbot/penal/ajax', [ChatbotPenalController::class, 'ajaxSubmit'])->name('chatbot.penal.ajax');

//Chatbot Tributario
Route::get('/chatbot/tributaria', [ChatbotTributarioController::class, 'showtributariaChatbot'])->name('chatbot.tributaria');
Route::post('/chatbot/tributaria/ajax', [ChatbotTributarioController::class, 'ajaxSubmit'])->name('chatbot.tributaria.ajax');

Route::get('/test-openai', function () {
    return response()->json([
        'api_key' => env('OPENAI_API_KEY'), // Esto debería devolver tu clave
        'config' => config('openai.api_key'), // Esto debería devolver la misma clave
    ]);
});

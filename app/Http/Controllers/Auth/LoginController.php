<?php

namespace App\Http\Controllers\Auth;

use App\Models\Abogado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $abogado = Abogado::where('id', $user->id)->first(); // Ajusta esto según tu estructura de datos
        // Si el correo del usuario contiene "@asesorialegal.com"
        if (strpos($user->email, '@asesorialegal.com') !== false) {
            // Redirigir a la vista 'dashboard'
            return redirect()->route('abogado.dashboard', ['id' => $abogado->id]);

        }

        if (strpos($user->email, 'admin@admin.com') !== false) {
            // Redirigir a la vista 'dashboard'
            return redirect()->route('admin.dashboard');
        }

        // Redirigir a la ruta por defecto si no es ese usuario
        return redirect()->intended($this->redirectPath());
    }
}


// @if(Auth::check())
//     <p>Bienvenido, {{ Auth::user()->name }}</p>
//     <!-- Contenido que deseas mostrar solo a usuarios autenticados -->
// @else
//     <p>Bienvenido, invitado. <a href="{{ route('login') }}">Inicia sesión</a> o <a href="{{ route('register') }}">Regístrate</a></p>
//     <!-- Contenido que deseas mostrar a todos los usuarios -->
// @endif

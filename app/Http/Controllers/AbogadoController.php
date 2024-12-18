<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\User;
use App\Models\SolicitudAsistencia;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AbogadoController extends Controller
{
    public function index()
    {
        $datos['abogados'] = Abogado::paginate(1000);
        return view('admin.abogados.index', $datos);
    }
    
    public function filtrarPorEspecialidad($especialidad)
{
    // Filtrar los abogados por la especialidad proporcionada
    $datos['abogados'] = Abogado::where('especialidad', $especialidad)->paginate(1000);
    
    // Retornar la vista con los abogados filtrados
    $vista = 'recomendacion-abogado.' . strtolower($especialidad);
    // Verificar si la vista existe, de lo contrario mostrar error o una vista por defecto
    if (!view()->exists($vista)) {
        return abort(404, 'Vista no encontrada para la especialidad: ' . $especialidad);
    }

    // Retornar la vista con los abogados filtrados
    return view($vista, $datos);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.abogados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->merge(['email' => $request->email_prefix . '@asesorialegal.com']);

        $campos=[
            'rut_abogado'   => 'required|string|max:100|unique:abogados',
            'imagen'         => 'required|max:10000|mimes:jpeg,png,jpg',
            'name'           => 'required|string|max:100',
            'especialidad'   => 'required|string|max:100',
            'email'         => 'required|string|email|max:255|unique:abogados',
            'telefono'       => 'required|string|max:999999999',
            'sueldo'         => 'required|string|max:999999999',
            'biografia'      => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'imagen' => 'La imagen es requerida',
            'unique' => 'El :attribute ya existe.',
            'numeric' => 'El :attribute debe ser un número',

        ];
        $this->validate($request, $campos, $mensaje);
        $datosAbogado = $request->except('_token','email_prefix');

        if ($request->hasFile('imagen')) {
            $rutaImagen = $request->file('imagen')->store('uploads', 'public');
            $datosAbogado['imagen'] = $rutaImagen; // Guarda solo la ruta relativa
        }
    
        $usuario = User::create([
            'rut_abogado'   => $request->rut_abogado,
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->email)
        ]);
        $datosAbogado['id'] = $usuario->id; 

        Abogado::insert($datosAbogado);
        return redirect()->route('admin.dashboard')->with('mensaje','Abogado agregado correctamente');
    }
        

    
    /**
     * Display the specified resource.
     */
    public function show(Abogado $abogado)
    {
        //
        return $abogado;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $abogado = Abogado::findOrFail($id);
        return view('admin.abogados.edit', compact('abogado'));
        
        

    }

    public function mostrarVistaEditar()
    {
        $datos['abogados']=Abogado::paginate(1000);
        return view('admin.abogados.showedit',$datos); 
    }


    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'especialidad'   => 'required|string|max:100',
            'telefono'       => 'required|string|max:999999999',
            'sueldo'         => 'required|string|max:999999999',
            'biografia'      => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'imagen' => 'La imagen es requerida',
            'unique' => 'El :attribute ya existe.',
            'numeric' => 'El :attribute debe ser un número',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosAbogado = request()->except(['_token','_method']);

        Abogado::where('id','=',$id)->update($datosAbogado);
        $Abogado=Abogado::findOrFail($id);
        return redirect('/dashboard')->with('mensaje','Abogado actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $abogado = Abogado::findOrFail($id);
        $usuario = User::find($abogado->id);

        $abogado->delete();

        if ($usuario) {
            $usuario->delete();
        }

        return redirect('/dashboard')->with('mensaje', 'Abogado borrado correctamente')->with('tipo_mensaje', 'danger');
    }

    public function mostrarVistaEliminar()
    {
        $datos['abogados']=Abogado::paginate(1000);
        return view('admin.abogados.destroy',$datos);
    }
    
    public function mostrarFormulario($id)
    {
        // Encuentra el abogado por ID
        $abogado = Abogado::findOrFail($id);
        return view('recomendacion-abogado.form', compact('abogado'));
    }

    public function enviarSolicitud(Request $request, $id)
    {
        $campos = [
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|numeric|',
            'correo' => 'required|email|max:255|unique:solicitudes_asistencia,correo',
            'descripcion' => 'required|string|max:1000',
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'numeric' => 'El :attribute debe ser un número',
            'max' => 'El :attribute no debe superar :max caracteres',
            'correo' => 'El :attribute debe ser un correo electrónico válido',
            'unique' => 'El :attribute ya realizo una solicitud',
        ];
        

        // Definir las reglas de validación
        
        // dd($request->all());

        $this->validate($request, $campos, $mensaje);

        SolicitudAsistencia::create([
            'abogado_id' => $id, // Asegúrate de que esta línea esté aquí
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'descripcion' => $request->descripcion,
        ]);

        // Guardar los datos en la base de datos o enviar un correo, según tu lógica
        // Aquí deberías implementar la lógica para guardar o enviar los datos

        return redirect()->route('abogados.solicitud', $id)->with('success', 'Formulario enviado exitosamente.');
    }

    public function mostrarDashboard($id)
{
    $abogado = Abogado::findOrFail($id);
    $solicitudes = $abogado->solicitudes()->get();
    $totalSolicitudes = $solicitudes->count();


    return view('abogado.dashboard', compact('abogado', 'solicitudes','totalSolicitudes'));
}
}

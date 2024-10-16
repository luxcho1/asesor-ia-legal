<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\User;

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
    return view('admin.abogados.index', $datos);
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
        $campos=[
            'imagen'         => '|image|mimes:jpg,jpeg,png|max:2048',
            'name'         => 'required|string|max:100',
            'especialidad'   => 'required|string|max:100',
            'email'          => 'required|string|max:99999',
            'telefono'       => 'required|numeric|max:999999999',
            'sueldo'         => 'required|numeric|max:999999999',
            'biografia'      => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        if ($request->hasFile('imagen')) {
            // Guarda la imagen en 'storage/app/public/uploads' y devuelve la ruta relativa
            $rutaImagen = $request->file('imagen')->store('uploads', 'public');
            
            // Guarda la ruta de la imagen (ej. 'uploads/nombre_imagen.jpg') en lugar de la ruta temporal
            $datosProducto['imagen'] = $rutaImagen;
        }
        

        $this->validate($request, $campos, $mensaje);
        $usuario = User::create([
            'rut_abogado'   => $request->rut_abogado,
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->email)
        ]);
        $datosAbogado = request()->except('_token');
        $datosAbogado['id'] = $usuario->id; 

        Abogado::insert($datosAbogado);
        return redirect()->route('admin.dashboard');
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
        $Abogado = Cliente::findOrFail($id);
        return view('abogados.editar', compact('abogado'));
    }


    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre'         => 'required|string|max:100',
            'especialidad'   => 'required|string|max:100',
            'email'          => 'required|string|max:99999',
            'telefono'       => 'required|numeric|max:999999999',
            'sueldo'         => 'required|numeric|max:1000',
            'biografia'      => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosAbogado = request()->except(['_token','_method']);

        Abogado::where('id','=',$id)->update($datosAbogado);
        $Abogado=Abogado::findOrFail($id);
        return redirect('/dashboard')->with('mensaje','Cliente actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Abogado=Abogado::findOrFail($id);
        Abogado::destroy($id);
        return redirect('/dashboard')->with('mensaje','Producto borrado correctamente');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Empresa;
use App\User;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();

        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();

        return view('empleados.create', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'empresa' => 'required'
        ]);

        Empleado::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'empresa_id' => $request->empresa
        ]);

        return redirect()
            ->route('empleado.index')
            ->with('create_result', [
                'status' => 'success',
                'content' => 'Empleado creado correctamente'
            ])
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        $usuario = User::where('email', $empleado->email)->first();

        if ($usuario) {
            $gestionar_usuario = false;
        } else {
            $gestionar_usuario = true;
        }

        return view('empleados.show', compact('empleado', 'gestionar_usuario', 'usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $empresas = Empresa::all();

        return view('empleados.edit', compact('empleado' ,'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $this->validate(request(), [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'empresa' => 'required'
        ]);

        $usuario = User::where('email', $empleado->email)->first();

        if ($usuario)
        {
            $usuario->name = $request->nombre . ' ' . $request->apellido;
            $usuario->email = $request->email;

            $usuario->save();
        }

        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->empresa_id = $request->empresa;

        $empleado->save();

        return redirect()
            ->route('empleado.show', $empleado->id)
            ->with('process_result', [
                'status' => 'success',
                'content' => 'Empleado actualizado correctamente'
            ])
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()
            ->route('empleado.index')
            ->with('create_result', [
                'status' => 'success',
                'content' => 'Empleado eliminado correctamente'
            ])
        ;
    }
}

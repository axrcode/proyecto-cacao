<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::where('id', $request->empleado)->first();

        $password = time();

        $usuario = User::create([
            'name' => $empleado->nombre . ' ' . $empleado->apellido,
            'email' => $empleado->email,
            'password' => Hash::make($password),
            'rol_id' => 2,
        ]);

        return redirect()->route('usuario.show', $usuario->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Rol::all();

        return view('usuarios.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->rol_id = $request->rol;

        $user->save();

        return redirect()
            ->route('usuario.show', $user->id)
            ->with('process_result', [
                'status' => 'success',
                'content' => 'Usuario actualizado correctamente'
            ])
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('empleado.index')
            ->with('process_result', [
                'status' => 'success',
                'content' => 'Usuario inhabilitado correctamente'
            ])
        ;
    }
}

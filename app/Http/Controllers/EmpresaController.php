<?php

namespace App\Http\Controllers;

use App\Mail\Notificacion;
use App\Models\Empleado;
use App\Models\Empresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmpresaController extends Controller
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
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
            'email' => 'required|string',
            'direccion' => 'required|string',
            'website' => 'required|string',
            'logo' => 'required|image|dimensions:min_width=150,min_height=150',
        ]);

        //$rutaImagen = $request['logo']->store('empresas', 'public');
        $logo = $request->file('logo');
        $nombreLogo = time() . '.' . $logo->extension();
        $logo->move(public_path('storage/empresas'), $nombreLogo);

        $empresa = Empresa::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'website' => $request->website,
            'logo' => "/storage/empresas/$nombreLogo",
        ]);


        $usuarios_notificaiones = User::where('notificaciones', true)->get();

        foreach ($usuarios_notificaiones as $usuario)
        {
            Mail::to($usuario->email)->queue(new Notificacion($empresa));
        }

        return redirect()
            ->route('empresa.show', $empresa->id)
            ->with('process_result', [
                'status' => 'success',
                'content' => 'Empresa creada correctamente'
            ])
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $this->validate(request(), [
            'nombre' => 'required|string',
            'email' => 'required|string',
            'direccion' => 'required|string',
            'website' => 'required|string',
            'logo' => 'image|dimensions:min_width=150,min_height=150',
        ]);

        if (!empty($request->logo))
        {
            $logo = $request->file('logo');
            $nombreLogo = time() . '.' . $logo->extension();
            $logo->move(public_path('storage/empresas'), $nombreLogo);

            $empresa->logo = "/storage/empresas/$nombreLogo";
        }

        $empresa->nombre = $request->nombre;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->website = $request->website;

        $empresa->save();

        return redirect()
            ->route('empresa.show', $empresa->id)
            ->with('process_result', [
                'status' => 'success',
                'content' => 'Empresa actualizada correctamente'
            ])
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empleadosConectados = Empleado::where('empresa_id', $empresa->id)->get();

        $status = 'error';
        $content = 'Esta empresa tiene empleados conectados';

        if (sizeof($empleadosConectados) == 0)
        {
            $status = 'success';
            $content = 'Empresa eliminada correctamente';

            $empresa->delete();
        }

        return redirect()
            ->route('empresa.index')
            ->with('process_result', [
                'status' => $status,
                'content' => $content
            ])
        ;
    }
}

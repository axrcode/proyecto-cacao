@extends('layouts.app')

@section('head')

    <title>{{ $empleado->nombre }} {{ $empleado->apellido }} | Proyecto Cacao</title>

@endsection

@section('content')

<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Sidebar Container -->
    @include('layouts.drawer')

    <!-- Content Wrapper. Contains page content -->
    <section class="content-wrapper">

        <!-- Header del Contenedor -->
        <div class="content-header">
            <div class="container-fluid">

                <div class="row my-2">
                    <div class="col-12">
                        <h1 class="ml-2">
                            <i class="fas fa-user-tie mr-2"></i>
                            Editar Empleado
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8">

                        <div class="card card-outline card-dark">
                            <div class="card-body">

                                <form action="{{ route('empleado.update', $empleado->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="nombre">
                                                    Nombre
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('nombre') is-invalid @enderror"
                                                    id="nombre"
                                                    name="nombre"
                                                    value="{{ $empleado->nombre }}"
                                                    placeholder="Ingrese el nombre del empleado"
                                                    autocomplete="off"
                                                >
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="apellido">
                                                    Apellido
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('apellido') is-invalid @enderror"
                                                    id="apellido"
                                                    name="apellido"
                                                    value="{{ $empleado->apellido }}"
                                                    placeholder="Ingrese el apellido del empleado"
                                                    autocomplete="off"
                                                >
                                                @error('apellido')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="email">
                                                    Correo Electrónico
                                                </label>

                                                <input
                                                    type="email"
                                                    class="form-control form-control-sm form-control-border @error('email') is-invalid @enderror"
                                                    id="email"
                                                    name="email"
                                                    value="{{ $empleado->email }}"
                                                    placeholder="Ingrese el correo electrónico del empleado"
                                                    autocomplete="off"
                                                >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="telefono">
                                                    Teléfono
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('telefono') is-invalid @enderror"
                                                    id="telefono"
                                                    name="telefono"
                                                    value="{{ $empleado->telefono }}"
                                                    placeholder="Ingrese el teléfono del empleado"
                                                    autocomplete="off"
                                                >
                                                @error('telefono')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="empresa">
                                                    Empresa
                                                </label>

                                                <select
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('empresa') is-invalid @enderror"
                                                    id="empresa"
                                                    name="empresa"
                                                >
                                                    @foreach ($empresas as $empresa)
                                                        <option
                                                            value="{{ $empresa->id }}"
                                                            {{ $empleado->empresa_id == $empresa->id ? 'selected' : '' }}
                                                        >
                                                            {{ $empresa->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('empresa')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 pt-3">
                                            <div class="row">
                                                <div class="col-12 offset-md-8 col-md-4 px-3">
                                                    <button type="submit" class="btn btn-success btn-sm btn-block">
                                                        <i class="fas fa-save mr-2"></i>
                                                        Guardar Cambios
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- Main Footer -->
    @include('layouts.mainfooter')

</div>

@endsection

@section('js')

    <script>
        function cambiar(){
            var pdrs = document.getElementById('file-upload').files[0].name;
            document.getElementById('info').innerHTML = pdrs;
        }
    </script>

@endsection

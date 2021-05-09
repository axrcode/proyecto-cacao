@extends('layouts.app')

@section('head')

    <title>{{ $empresa->nombre }} | Proyecto Cacao</title>

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
                            <i class="fas fa-building mr-2"></i>
                            Editar Empresa
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

                                <form action="{{ route('empresa.update', $empresa->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="nombre">
                                                    Nombre de la Empresa
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('nombre') is-invalid @enderror"
                                                    id="nombre"
                                                    name="nombre"
                                                    value="{{ $empresa->nombre }}"
                                                    placeholder="Ingrese el nombre de la empresa"
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
                                                <label for="direccion">
                                                    Dirección
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('direccion') is-invalid @enderror"
                                                    id="direccion"
                                                    name="direccion"
                                                    value="{{ $empresa->direccion }}"
                                                    placeholder="Ingrese la dirección de la empresa"
                                                    autocomplete="off"
                                                >
                                                @error('direccion')
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
                                                    value="{{ $empresa->email }}"
                                                    placeholder="Ingrese el correo electrónico de la empresa"
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
                                                <label for="website">
                                                    Sitio Web
                                                </label>

                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border @error('website') is-invalid @enderror"
                                                    id="website"
                                                    name="website"
                                                    value="{{ $empresa->website }}"
                                                    placeholder="Ingrese el sitio web de la empresa"
                                                    autocomplete="off"
                                                >
                                                @error('website')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 px-3">
                                            <div class="form-group">
                                                <label for="logo">
                                                    Cambiar Logotipo
                                                </label>

                                                <input
                                                    type="file"
                                                    class="form-control form-control-sm form-control-border @error('logo') is-invalid @enderror"
                                                    id="logo"
                                                    name="logo"
                                                    accept="image/*"
                                                >
                                                @error('logo')
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
                                                        Guardar
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

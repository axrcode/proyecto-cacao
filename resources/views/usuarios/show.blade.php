@extends('layouts.app')

@section('head')

    <title>{{ $user->name }} | Proyecto Cacao</title>

    <!-- Toastr -->
    <link rel="stylesheet" href="/assets/adminlte/plugins/toastr/toastr.min.css">

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
                            <i class="fas fa-user-cog mr-2"></i>
                            Usuario de Acceso
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- INFORMACIÓN PRIMARIA -->
                <div class="row">
                    <div class="col-12 col-lg-5 align-items-stretch">
                        <form action="{{ route('usuario.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card bg-white text-center">

                                <div class="card-body text-left">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="lead mb-4">
                                                <b>{{ $user->name }}</b>
                                            </h2>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">
                                                    Correo Electrónico
                                                </label>

                                                <input
                                                    type="email"
                                                    class="form-control form-control-sm form-control-border"
                                                    id="email"
                                                    name="email"
                                                    value="{{ $user->email }}"
                                                    readonly
                                                    autocomplete="off"
                                                >
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="rol">
                                                    Rol del Usuario
                                                </label>

                                                <select
                                                    type="text"
                                                    class="form-control form-control-sm form-control-border"
                                                    id="rol"
                                                    name="rol"
                                                >
                                                    @foreach ($roles as $rol)
                                                        <option
                                                            value="{{ $rol->id }}"
                                                            {{ $user->rol_id == $rol->id ? 'selected' : '' }}
                                                        >
                                                            {{ ucwords($rol->descripcion) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input
                                                    type="checkbox"
                                                    class="form-check-input"
                                                    id="notificaciones"
                                                    name="notificaciones"
                                                    @if ($user->notificaciones == true) checked @endif
                                                >
                                                <label for="notificaciones" class="form-check-label">
                                                    Enviar Notificaciones
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-left">
                                    <div class="row">
                                        <div class="col-md-2 mb-2 mb-md-0">
                                            <button type="button" class="btn btn-danger btn-block btn-xs" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                        <div class="offset-md-6 col-md-4 mb-2 mb-md-0">
                                            <button type="submit" class="btn btn-info btn-xs btn-block">
                                                Actualizar
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- Modal -->
    <form action="{{ route('usuario.update', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-trash mr-2"></i>
                            Eliminar Acceso del Usuario
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿ Desea eliminar el acceso al sistema del usuario
                        <span class="font-weight-bold">{{ $user->name }}</span>
                        ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Main Footer -->
    @include('layouts.mainfooter')

</div>

@endsection

@section('js')

    <!-- Toastr -->
    <script src="/assets/adminlte/plugins/toastr/toastr.min.js"></script>

    @if ( session()->has('process_result') )
        <script>
            $(function() {
                toastr.{{ session('process_result')['status'] }}('{{ session('process_result')['content'] }}')
            });
        </script>
    @endif

@endsection

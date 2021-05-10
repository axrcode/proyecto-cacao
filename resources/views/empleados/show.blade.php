@extends('layouts.app')

@section('head')

    <title>{{ $empleado->nombre }} {{ $empleado->apellido }} | Proyecto Cacao</title>

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
                            <i class="fas fa-user-tie mr-2"></i>
                            Ficha del Empleado
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
                    <div class="col-12 col-lg-6 align-items-stretch">
                        <div class="card bg-white text-center">

                            <div class="card-body text-left">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="lead mb-4">
                                            <b>{{ $empleado->nombre }} {{ $empleado->apellido }} </b>
                                        </h2>

                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-envelope mr-3"></i>
                                                </span>
                                                {{ $empleado->email }}
                                            </li>
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-phone-square-alt mr-3"></i>
                                                </span>
                                                {{ $empleado->telefono }}
                                            </li>
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-building mr-3"></i>
                                                </span>
                                                {{ $empleado->empresa->nombre }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-left">
                                <div class="row">
                                    <div class="offset-md-8 col-md-4">
                                        <a  href="{{ route('empleado.edit', $empleado->id) }}"
                                            class="btn btn-secondary btn-xs btn-block">
                                            <i class="fas fa-edit mr-2"></i>
                                            Editar Empleado
                                        </a>
                                    </div>
                                </div>
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

@extends('layouts.app')

@section('head')

    <title>{{ $empresa->nombre }} | Proyecto Cacao</title>

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
                            <i class="fas fa-building mr-2"></i>
                            Ficha de la Empresa
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
                                    <div class="col-12 col-md-4 text-center ">
                                        <img
                                            src="@if ($empresa->logo == null) /assets/img/error.png @else {{ $empresa->logo }} @endif"
                                            class="img-thumbnail mb-2 shadow-sm w-100"
                                        >
                                    </div>
                                    <div class="col-12 col-md-8 ">
                                        <h2 class="lead mb-4">
                                            <b>{{ $empresa->nombre }}</b>
                                        </h2>

                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-envelope mr-3"></i>
                                                </span>
                                                {{ $empresa->email }}
                                            </li>
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-map-marked-alt mr-3"></i>
                                                </span>
                                                {{ $empresa->direccion }}
                                            </li>
                                            <li class="mt-2 ml-2">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-globe mr-3"></i>
                                                </span>
                                                <a href="https://{{ $empresa->website }}" target="_blank">
                                                    {{ $empresa->website }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-left">
                                <div class="row">
                                    <div class="offset-md-8 col-md-4">
                                        <a  href="{{ route('empresa.edit', $empresa->id) }}"
                                            class="btn btn-secondary btn-xs btn-block">
                                            <i class="fas fa-edit mr-2"></i>
                                            Editar Empresa
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

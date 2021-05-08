@extends('layouts.app')

@section('head')

    <title>Dashboard | Proyecto Cacao</title>

@endsection

@section('content')

<div class="wrapper">

    <!-- Preloader -->
    <div class="dark-mode">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img
                class="animation__wobble"
                src="/assets/img/goedu-logo.png"
                alt="AdminLTELogo"
                height="150" width="200"
            >
        </div>
    </div>

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Sidebar Container -->
    @include('layouts.drawer')

    <!-- Content Wrapper. Contains page content -->
    <section class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                {{-- <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <a href="{{ route('inscripciones.index') }}">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $total_inscripciones }}</h3>
                                    <p>Inscripciones</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <a href="{{ route('cotizaciones.index') }}">
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>{{ $total_cotizaciones }}</h3>
                                    <p>Cotizaciones</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}

                <div class="row">

                    <div class="col-12 col-md-8">
                        <div class="card card-outline card-dark">
                            <div class="card-header border-transparent">
                                <h1 class="card-title font-weight-bold">
                                    Últimas Inscripciones
                                </h1>
                            </div>

                            <div class="card-body p-0">





                            </div>

                            <div class="card-footer clearfix">
                                <a  href=""
                                    class="btn btn-xs btn-light border float-right py-1 px-4">
                                    Ver todas las inscripciones
                                </a>
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

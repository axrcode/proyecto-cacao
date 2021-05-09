@extends('layouts.app')

@section('head')

    <title>Dashboard | Proyecto Cacao</title>

@endsection

@section('content')

<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Sidebar Container -->
    @include('layouts.drawer')

    <!-- Content Wrapper. Contains page content -->
    <section class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row my-2">
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
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <a href="{{ route('empresa.index') }}">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $totalEmpresas }}</h3>
                                    <p>Empresas</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <a href="#">
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>{{ $totalEmpleados }}</h3>
                                    <p>Empleados</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- Main Footer -->
    @include('layouts.mainfooter')

</div>

@endsection

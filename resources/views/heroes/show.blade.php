@extends('layouts.app')

@section('head')

    <title>{{ $personaje['name'] }} | Proyecto Cacao</title>

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
                            <i class="fas fa-mask mr-2"></i>
                            Héroes
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-9">

                        <div class="card card-outline card-dark">

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <a href="{{ route('heroes.show', $personaje['id']) }}">
                                            <div class="card">
                                                <img src="{{ $personaje['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $personaje['name'] }} - {{ $personaje['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $personaje['biography']['aliases'][1] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-8">

                                        <div class="card">

                                            <div class="card-header p-2">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#biografia" data-toggle="tab">
                                                            Biografía
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#poderes" data-toggle="tab">
                                                            Poderes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#apariencia" data-toggle="tab">
                                                            Apariencia
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <div class="tab-content">

                                                    <div class="active tab-pane" id="biografia">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <h4 class="font-weight-bold">
                                                                    Name:
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <p class="h5 font-weight-normal">
                                                                    {{ $personaje['biography']['full-name'] }}
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-bold">
                                                                    Alter Ego:
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <p class="h5 font-weight-normal">
                                                                    {{ $personaje['biography']['alter-egos'] }}
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-bold">
                                                                    Alias:
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                @foreach ($personaje['biography']['aliases'] as $item)
                                                                    <p class="h5 font-weight-normal">
                                                                        {{ $item }}
                                                                    </p>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="poderes">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Inteligencia:</b>
                                                                    {{ $personaje['powerstats']['intelligence'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Fuerza:</b>
                                                                    {{ $personaje['powerstats']['strength'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Velocidad:</b>
                                                                    {{ $personaje['powerstats']['speed'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Durabilidad:</b>
                                                                    {{ $personaje['powerstats']['durability'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Poder:</b>
                                                                    {{ $personaje['powerstats']['power'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Combate:</b>
                                                                    {{ $personaje['powerstats']['combat'] }}
                                                                </h4>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="apariencia">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Género:</b>
                                                                    {{ $personaje['appearance']['gender'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Raza:</b>
                                                                    {{ $personaje['appearance']['race'] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Altura:</b>
                                                                    {{ $personaje['appearance']['height'][1] }}
                                                                </h4>
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="font-weight-normal">
                                                                    <b>Peso:</b>
                                                                    {{ $personaje['appearance']['weight'][1] }}
                                                                </h4>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

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

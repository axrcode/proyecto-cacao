@extends('layouts.app')

@section('head')

    <title>Heroes | Proyecto Cacao</title>

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
                    <div class="col-12">

                        <div class="card card-outline card-dark">

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $flash['id']) }}">
                                            <div class="card">
                                                <img src="{{ $flash['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $flash['name'] }} - {{ $flash['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $flash['biography']['aliases'][1] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $superman['id']) }}">
                                            <div class="card">
                                                <img src="{{ $superman['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $superman['name'] }} - {{ $superman['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $superman['biography']['aliases'][3] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $spiderman['id']) }}">
                                            <div class="card">
                                                <img src="{{ $spiderman['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $spiderman['name'] }} - {{ $spiderman['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $spiderman['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $drmanhatan['id']) }}">
                                            <div class="card">
                                                <img src="{{ $drmanhatan['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $drmanhatan['name'] }} - {{ $drmanhatan['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $drmanhatan['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $captainamerica['id']) }}">
                                            <div class="card">
                                                <img src="{{ $captainamerica['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $captainamerica['name'] }} - {{ $captainamerica['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $captainamerica['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $scarletwitch['id']) }}">
                                            <div class="card">
                                                <img src="{{ $scarletwitch['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $scarletwitch['name'] }} - {{ $scarletwitch['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $scarletwitch['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $thanos['id']) }}">
                                            <div class="card">
                                                <img src="{{ $thanos['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $thanos['name'] }} - {{ $thanos['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $thanos['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a href="{{ route('heroes.show', $mephisto['id']) }}">
                                            <div class="card">
                                                <img src="{{ $mephisto['image']['url'] }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 class="card-title font-weight-bold">
                                                        {{ $mephisto['name'] }} - {{ $mephisto['biography']['full-name'] }}
                                                    </h1>
                                                    <p class="card-text">
                                                        {{ $mephisto['biography']['aliases'][0] }}
                                                    </p>
                                                </div>
                                            </div>
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

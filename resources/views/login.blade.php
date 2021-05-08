<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | Proyecto Cacao</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Headers para eliminar el Control Cache en Formularios -->
    @php
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    @endphp

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Proyecto Cacao.gt
            </a>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    @if (session()->has('unauthorized'))
                        <div class="alert alert-warning text-center" role="alert">
                            <i class="fas fa-info-circle mr-2"></i>
                            {{ session('unauthorized') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('auth.login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label
                                        for="email"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('E-Mail Address') }}
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="off"
                                            autofocus
                                        >

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="password"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Password') }}
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="password"
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            required
                                            autocomplete="off"
                                        >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary px-5">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

</body>
</html>

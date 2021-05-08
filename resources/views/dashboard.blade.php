@extends('layouts.app')

@section('head')

    <title>Dashboard | Proyecto Cacao</title>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('You are logged in!') }}

                    <div class="row">
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm ml-3 px-3">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

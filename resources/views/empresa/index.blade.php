@extends('layouts.app')

@section('head')

    <title>Empresas | Proyecto Cacao</title>

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
                            Empresas
                        </h1>
                    </div>

                    <div class="col-12 col-md-3 pt-3">
                        <a  href="{{ route('empresa.create') }}"
                            class="btn btn-info btn-block btn-xs px-5">
                            <i class="fas fa-plus-square mr-2"></i>
                            Crear Nueva Empresa
                        </a>
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
                                <table id="empresas" class="table table-bordered compact">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Logotipo</th>
                                            <th>Sitio Web</th>
                                            <th>Dirección</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($empresas as $empresa)
                                            <tr>
                                                <td>{{ $empresa->nombre }}</td>
                                                <td>{{ $empresa->email }}</td>
                                                <td>{{ $empresa->logo }}</td>
                                                <td>
                                                    <a href="{{ $empresa->website }}" target="_blank">
                                                        {{ $empresa->website }}
                                                    </a>
                                                </td>
                                                <td>{{ $empresa->direccion }}</td>
                                                {{-- <td class="bg-light"><b>{{ $empresa->curso->nombre }}</b></td> --}}
                                                <td>
                                                    <div class="row">
                                                        <div class="col-6 px-1">
                                                            <a  href="{{ route('empresa.show', $empresa->id) }}"
                                                                class="btn btn-block btn-success btn-xs">
                                                                <i class="fas fa-file-alt"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 px-1">
                                                            <button
                                                                type="button" class="btn btn-block btn-danger btn-xs"
                                                                data-toggle="modal" data-target="#delete-{{ $empresa->id }}">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>

                                                            <!-- MODAL DELETE -->
                                                            <form action="{{ route('empresa.index', $empresa->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <div class="modal fade" id="delete-{{ $empresa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                    Eliminar Inscripción
                                                                                </h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <p>
                                                                                            ¿ Está seguro de elimnar la inscripción de
                                                                                            <span class="font-weight-bold">
                                                                                                {{ $empresa->nombre }} {{ $empresa->apellidos }}
                                                                                            </span>
                                                                                            ?
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

    <!-- DataTables  & Plugins -->
    <script src="/assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="/assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function () {
            $("#empresas").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ entradas en total)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#empresas_wrapper .col-md-6:eq(0)');
        });
    </script>

@endsection

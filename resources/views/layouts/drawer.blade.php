<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img
            src="/assets/adminlte/img/AdminLTELogo.png"
            alt="Logo GoEdu"
            class="brand-image"
            style="opacity: .8"
        >
        <span class="brand-text font-weight-bold">
            Proyecto Cacao
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (SCREEN MD) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="/assets/adminlte/img/avatar.png"
                    class="img-circle elevation-2"
                    alt="User Image"
                >
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ active( route('dashboard') ) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Detalles de Información
                        </p>
                    </a>
                </li>

                <li class="nav-item"> {{-- menu-open --}}
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>
                            Páginas Sitio Web
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                {{-- <i class="fas fa-caret-right nav-icon"></i> --}}
                                <p class="ml-5">Pantalla - Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                {{-- <i class="fas fa-caret-right nav-icon"></i> --}}
                                <p class="ml-5">Pantalla - Nosotros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                {{-- <i class="fas fa-caret-right nav-icon"></i> --}}
                                <p class="ml-5">Pantalla - Servicios</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">Administración</li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Inscripciones
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="sidebar-custom">
        <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
        <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
    </div>
</aside>

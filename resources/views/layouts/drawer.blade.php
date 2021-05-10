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
                    <a href="{{ route('empresa.index') }}" class="nav-link {{ active( route('empresa.index') ) }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Empresas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('empleado.index') }}" class="nav-link {{ active( route('empleado.index') ) }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Empleados
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('heroes.index') }}" class="nav-link {{ active( route('empresa.index') ) }}">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Notificaciones
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('heroes.index') }}" class="nav-link {{ active( route('heroes.index') ) }}">
                        <i class="nav-icon fas fa-mask"></i>
                        <p>
                            Héroes
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

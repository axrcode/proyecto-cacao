<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Enlaces del Navbar Izquierda -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Enlaces del Navbar Derecha -->
    <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item">
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-xs px-4">
                    <i class="fas fa-sign-out-alt mr-1"></i>
                    Cerrar Sesión
                </button>
            </form>
        </li>
    </ul>

</nav>

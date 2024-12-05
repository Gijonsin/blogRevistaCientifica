<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'RENOVATEC')</title>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/custom.scss', 'resources/js/quill-editor.js']) --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/quill-editor.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand disabled-link">PULSO TEC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('actual.vista_actual') }}"
                            id="link-actual">Actual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('archivos.vista_archivo') }}">Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('avisos.index') }}">Avisos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_sobreLaRevista') }}">Sobre la
                                    Revista</a></li>
                            <li><a class="dropdown-item" href="{{ route('envios.vista_envio') }}">Envios</a></li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_directorio') }}">Directorio</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_comite') }}">Comité
                                    Editorial</a></li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_revisores') }}">Revisores</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_webmaster') }}">Equipo de
                                    Desarrollo</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_editor') }}">Editor
                                    Responsable</a></li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_indexa') }}">Indexaciones y
                                    estándares</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('acercade.vista_declaracion_privacidad') }}">Declaración de
                                    privacidad</a></li>
                            <li><a class="dropdown-item" href="{{ route('acercade.vista_contacto') }}">Contacto</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.vista_login') }}">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.vista_register') }}">Registrarse</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-3" style="font-size: 2rem;"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Envios Recientes</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    @if (session('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <!-- Contenido dinámico -->
    <main class="flex-grow-1 container mt-4">
        @yield('content')
    </main>

    <footer class="bg-body-tertiary text-center">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Suscríbete a la revista</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form5Example26" class="form-control" />
                                <label class="form-label" for="form5Example26">Correo electrónico</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button data-mdb-ripple-init type="submit" class="btn btn-dark mb-4">
                                Suscribirse
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl, {
                    delay: 5000
                });
            });
            toastList.forEach(toast => toast.show());
        });
    </script>
</body>

</html>

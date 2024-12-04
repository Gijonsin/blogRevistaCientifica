<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'RENOVATEC')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio.vista_inicio') }}">REVISTA CIENTIFICA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('actual.vista_actual')}}" id="link-actual">Actual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('archivos.vista_archivo')}}">Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('avisos.vista_aviso')}}">Avisos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('acercade.vista_sobreLaRevista')}}">Sobre la Revista</a></li>
                            <li><a class="dropdown-item" href="{{route('envios.vista_envio')}}">Envios</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_directorio')}}">Directorio</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_comite')}}">Comité Editorial</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_revisores')}}">Revisores</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_webmaster')}}">Webmaster</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_editor')}}">Editor Responsable</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_indexa')}}">Indexaciones y estándares</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_declaracion_privacidad')}}">Declaración de privacidad</a></li>
                            <li><a class="dropdown-item" href="{{route('acercade.vista_contacto')}}">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer (opcional) -->
    <!-- <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} Revista Científica. Todos los derechos reservados.</p>
    </footer> -->

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
                                <strong>Suscribete a la revista</strong>
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
                            <button data-mdb-ripple-init type="submit" class="btn btn-primary mb-4">
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
</body>

</html>
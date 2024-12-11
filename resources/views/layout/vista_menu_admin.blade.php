<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Panel de Administración')</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js', 'resources/js/quill-editor.js'])

    <style>
        #sidebar {
            transition: width 0.3s;
            width: 200px;
            /* Ajusta este valor según sea necesario */
        }

        #sidebar.collapsed {
            width: 60px;
        }

        #sidebar.collapsed .d-none.d-sm-inline {
            visibility: hidden;
            /* Mantiene el espacio ocupado por el texto */
        }

        #sidebar.collapsed .nav-link {
            text-align: center;
            justify-content: center;
            /* Centra los iconos horizontalmente */
        }

        #sidebar.collapsed .nav-link i {
            margin-right: 0;
        }

        .nav-link {
            display: flex;
            align-items: center;
            height: 50px;
            /* Ajusta la altura según sea necesario */
        }

        .nav-link i {
            margin-right: 10px;
        }

        .nav-item {
            width: 100%;
            /* Asegura que los elementos de la lista ocupen todo el ancho */
        }

        @media (max-width: 768px) {

            #sidebar.collapsed .d-none.d-sm-inline {
                visibility: hidden;
                /* Mantiene el espacio ocupado por el texto */
            }

            #toggleSidebar {
                display: none;
            }


        }

        .navbar-custom {
            margin-bottom: 0;
        }

        .content {
            padding-top: 0;
        }

        .col {
            padding-left: 0;
            padding-right: 0;
        }

        .menu-title {
            margin-top: 20px;
            /* Ajusta este valor según sea necesario */
        }

        .mt-custom {
            margin-top: 20px;
            /* Ajusta este valor según sea necesario */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark collapsed" id="sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline menu-title">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <div class="mt-custom">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                                </a>
                            </li>
                        </div>
                        <!-- Más elementos del menú -->
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col p-0">
                <div class="bg-dark text-white d-flex justify-content-between align-items-center p-3 navbar-custom">
                    <button id="toggleSidebar" class="btn btn-outline-light d-none d-md-block">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="dropdown ms-auto">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Invitado
                                @endauth
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow"
                            aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @auth
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('usuarios.vista_login') }}">Iniciar Sesión</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('usuarios.vista_register') }}">Registrarse</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <!-- Your main content goes here -->
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });
    </script>

</html>

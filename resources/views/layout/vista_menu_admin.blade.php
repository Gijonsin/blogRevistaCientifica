<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Panel de Administración')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/quill-editor.js'])
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar bg-dark text-white vh-100">
            <nav class="nav flex-column p-3">
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-house-door-fill"></i> <span>Inicio</span>
                </a>
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-person-fill"></i> <span>Perfil</span>
                </a>
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-gear-fill"></i> <span>Configuraciones</span>
                </a>
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-box-arrow-right"></i> <span>Salir</span>
                </a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="content">
            <button class="btn btn-primary mb-3" onclick="toggleSidebar()">Toggle Sidebar</button>
            <h1>Contenido Principal</h1>
            <p>Este es el espacio donde se muestra el contenido principal de la página.</p>
        </div>
    </div>
</body>

</html>

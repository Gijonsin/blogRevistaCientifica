<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Archivo</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('inicio.vista_inicio')}}">REVISTA CIENTIFICA</a>
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
                        <li><a class="dropdown-item" href="#">Directorio</a></li>
                        <li><a class="dropdown-item" href="#">Comité Editorial</a></li>
                        <li><a class="dropdown-item" href="#">Revisores</a></li>
                        <li><a class="dropdown-item" href="#">Webmaster</a></li>
                        <li><a class="dropdown-item" href="#">Editor Responsable</a></li>
                    </ul>
             </li>
            </ul>
        </div>
    </div>
</nav>
<div id="content" class="container mt-4">
    <h1>CONTENIDO ARCHIVO</h1>
</div>
</body>
</html>
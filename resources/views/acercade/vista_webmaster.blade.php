<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Webmaster</title>
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
<div id="content" class="container mt-4">
    
<div class="card">
    <div class="card-header">
        <h2>Webmasters</h2>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Jose Eduardo Gijon Mora</li>
            <li class="list-group-item">Edgar Manuel Carrillo Muruato</li>
            <li class="list-group-item">Jesus Emmanuel Llamas Hernandez</li>
            <li class="list-group-item">Valery Araceli Guerrero Rodriguez</li>
        </ul>
    </div>
</div>
</div>
</body>
</html>
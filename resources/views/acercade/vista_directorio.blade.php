<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Directorio</title>
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
    <div class="directory">
        <h1 class="text-center my-4">Directorio</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>José Omar Saldivar Correa</h2>
                <p>Director</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Alma Leticia Ramos Ríos</h2>
                <p>Subdirectora Académica</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>José Irving Hernández Jácquez</h2>
                <p>División de Estudios de Posgrado e Investigación</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Jesús Rodolfo Gaona Pérez</h2>
                <p>Jefe del Departamento de Comunicación y Difusión</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Fernando Gil Vásquez</h2>
                <p>Jefe del Departamento del Sistemas y Computación</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Jorge Alberto Villalobos Chin</h2>
                <p>Jefe del Departamento de Ciencias Básicas</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Juan Carlos Castellanos Meza</h2>
                <p>Jefe del Departamento Metalmecánica</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Adriana Gamboa Hernández</h2>
                <p>Jefe del Departamento Química-Bioquímica</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Erika Alejandra Meraz Salazar</h2>
                <p>Jefe del Departamento Industrial</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Armando Macías de la Torre</h2>
                <p>Jefe del Departamento Eléctrica-Electrónica</p>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Javier Tobar Gutiérrez</h2>
                <p>Jefe del Departamento Ciencias Económico-Administrativas</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@extends('layout.vista_menu')

@section('title', 'Archivos')

@section('content')
<div id="content" class="container mt-4">

    <p>El registro y el inicio de sesión son necesarios para enviar elementos en línea y para comprobar el estado de los envíos recientes.</p>
    <p>
        <a href="{{route('usuarios.vista_login')}}" class="btn btn-primary">Iniciar sesión</a>
        o
        <a href="{{route('usuarios.vista_register')}}" class="btn btn-secondary">Registrar una nueva cuenta</a>
    </p>
    @if(!Auth::check())
    <div class="alert alert-warning" role="alert">
        Debes iniciar sesión para enviar un artículo.
    </div>
    @endif
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Artículo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Subir Archivo</label>
            <input type="file" class="form-control" id="archivo" name="archivo" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar Artículo</button>
    </form>
</div>
@endsection
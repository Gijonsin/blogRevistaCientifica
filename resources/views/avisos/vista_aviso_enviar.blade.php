@extends('layout.vista_menu')

@section('title', 'Subir Aviso')

@section('content')
    <div id="content" class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Subir Aviso</h4>
                    </div>
                    <div class="card-body">
                        <!-- Formulario -->
                        <form id="avisoForm" action="{{ route('avisos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título del Aviso</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido del Aviso</label>
                                <div id="editor" style="height: 300px; border: 1px solid #ccc;"></div>
                                <input type="hidden" id="contenido" name="contenido">
                            </div>
                            <button type="submit" class="btn btn-success">Subir Aviso</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

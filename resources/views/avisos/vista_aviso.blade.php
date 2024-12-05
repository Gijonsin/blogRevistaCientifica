@extends('layout.vista_menu')

@section('title', 'Lista de Avisos')

@section('content')

<div id="content" class="container mt-4">
    <h1 class="mb-4">Lista de Avisos</h1>

    @if ($avisos->isEmpty())
        <p>No hay avisos disponibles en este momento.</p>
    @else
        <div class="row">
            @foreach ($avisos as $aviso)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $aviso->TITULO_AVISOS }}</h5>
                            <p class="card-text">{!! Str::limit($aviso->CONTENIDO_AVISOS, 100) !!}</p>
                            <a href="{{ route('avisos.show', $aviso->ID_AVISOS) }}" class="btn btn-primary">Leer más</a>
                        </div>
                        <div class="card-footer text-muted">
                            Publicado: {{ date('d/m/Y', strtotime($aviso->CREADO_AVISOS)) }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
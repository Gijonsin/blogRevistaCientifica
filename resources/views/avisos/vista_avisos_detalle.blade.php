@extends('layout.vista_menu')

@section('title', 'Ver Aviso')

@section('content')
<div id="content" class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">{{ $aviso->TITULO_AVISOS }}</h2>
        </div>
        <div class="card-body">
            <div class="contenido-aviso">
                {!! $aviso->CONTENIDO_AVISOS !!}
            </div>
        </div>
        <div class="card-footer text-muted">
            Publicado el {{ \Carbon\Carbon::parse($aviso->CREADO_AVISOS)->format('d M Y') }} por {{ $aviso->user->name }}
        </div>
    </div>
</div>
@endsection
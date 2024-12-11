@extends('layout.vista_menu')

@section('title', 'Ver Aviso')

@section('content')
    <div id="content" class="container mt-4">
        <div class="card shadow">

            <div class="card-body">

                <div class="mb-4">
                    <h1>{{ $aviso->TITULO_AVISOS }}</h1>
                </div>
                <div class="mb-4 text-muted">
                    <p>Publicado el {{ \Carbon\Carbon::parse($aviso->CREADO_AVISOS)->format('d/m/Y') }} por
                        {{ $aviso->user->name }}</p>
                </div>

                <div class="contenido-aviso">
                    {!! $aviso->CONTENIDO_AVISOS !!}
                </div>
            </div>
            <div class="card-footer text-muted">
                Publicado el {{ \Carbon\Carbon::parse($aviso->CREADO_AVISOS)->format('d M Y') }} por
                {{ $aviso->user->name }}
            </div>
        </div>
    </div>
@endsection

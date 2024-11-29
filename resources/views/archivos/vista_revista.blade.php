@extends('layout.vista_menu')

@section('title', $archivo->TITULO_REVISTAS)

@section('content')
<div class="container">
    <h1>{{ $archivo->TITULO_REVISTAS }}</h1>
    <p>Volumen: {{ $archivo->VOLUMEN_REVISTAS }}</p>
    <p>Número: {{ $archivo->NUMERO_REVISTAS }}</p>
    <p>Fecha: {{ $archivo->FECHA_REVISTAS }}</p>
    <h2>Artículos asociados</h2>
    @if ($archivo->articulos->isEmpty())
    <p>No hay artículos asociados a esta revista.</p>
    @else
    <ul class="list-group list-group-flush">
        @foreach ($archivo->articulos as $articulo)
        <li class="list-group-item">
            <a href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}" class="text-primary">
                {{ $articulo->TITULO_ARTICULOS }}
            </a>
            <span class="text-muted d-block">Fecha: {{ $articulo->FECHA_ARTICULOS }}</span>
        </li>
        @endforeach
    </ul>

    @endif
</div>
@endsection
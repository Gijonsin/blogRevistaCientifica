@extends('layout.vista_menu')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>{{ $articulo->TITULO_ARTICULOS }}</h3>
        </div>
        <div class="card-body">
            <p><strong>ISSN:</strong> {{ $articulo->ISSN_ARTICULOS }}</p>
            <p><strong>Resumen:</strong> {{ $articulo->RESUMEN_ARTICULOS }}</p>
            <p><strong>Palabras clave:</strong> {{ $articulo->PALABRAS_ARTICULOS ?? 'N/A' }}</p>
            <p><strong>Fecha:</strong> {{ $articulo->FECHA_ARTICULOS }}</p>
            <p><strong>Revista:</strong> {{ $articulo->REVISTA_ARTICULOS }}</p>
            <p><strong>DOI:</strong> <a href="{{ $articulo->DOI_ARTICULOS }}" target="_blank">{{ $articulo->DOI_ARTICULOS }}</a></p>
            <p><strong>Enlace:</strong> <a href="{{ $articulo->URL_ARTICULOS }}" target="_blank">{{ $articulo->URL_ARTICULOS }}</a></p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection

@extends('layout.vista_menu')

@section('title', $archivo->TITULO_REVISTAS)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-3">{{ $archivo->TITULO_REVISTAS }}</h1>
                <h5 class="mb-3"><span class="fw-bold">RENOVATEC</span> - Revista de Divulgación Científica</h5>
                <div class="col-md-4">
                    <p><strong>Vol. </strong>{{ $archivo->VOLUMEN_REVISTAS }}
                        <strong>Núm. </strong> {{ $archivo->NUMERO_REVISTAS }}
                    </p>
                </div>

                <div class="col-md-4">
                    <p><strong>Fecha:</strong> {{ $archivo->FECHA_REVISTAS }}</p>
                </div>

                <div class="col-md-4">
                    <p><strong>Doi:</strong> {{ $archivo->DOI_REVISTAS}}</p>
                </div>
                <h2 class="mt-4">Artículos asociados</h2>
                <!-- Aquí puedes agregar la lista de artículos asociados -->
            </div>
            @if ($archivo->articulos->isEmpty())
                <div class="alert alert-info text-center" role="alert">
                    <h4 class="alert-heading">¡No hay articulos disponibles!</h4>
                    <p>En este momento no hay articulos disponibles. Por favor, vuelve más tarde.</p>
                </div>
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

@extends('layout.vista_menu')

@section('title', 'Actual')

@section('content')
    {{-- <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark" id="pageHeaderTitle">{{ $archivo->TITULO_REVISTAS }}</div>
            <p class="text-center">Volumen: {{ $archivo->VOLUMEN_REVISTAS }}</p>
            <p class="text-center">Número: {{ $archivo->NUMERO_REVISTAS }}</p>
            <p class="text-center">Fecha: {{ $archivo->FECHA_REVISTAS }}</p>

            <h2 class="text-center">Artículos asociados</h2>
            @if (!$archivo->articulos->isEmpty())
                <p class="text-center">No hay artículos asociados a esta revista.</p>
            @else
                @foreach ($archivo->articulos as $articulo)
                    <article class="postcard light blue">
                        <a class="postcard__img_link" href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title blue">
                                <a
                                    href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}">{{ $articulo->TITULO_ARTICULOS }}</a>
                            </h1>
                            <div class="postcard__subtitle small">
                                <time datetime="{{ $articulo->FECHA_ARTICULOS }}">
                                    <i class="fas fa-calendar-alt mr-2"></i>{{ $articulo->FECHA_ARTICULOS }}
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                {{ Str::limit($articulo->RESUMEN_ARTICULOS, 150) }}
                            </div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Artículo</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{ $articulo->FECHA_ARTICULOS }}
                                </li>
                                <li class="tag__item play blue">
                                    <a href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}"><i
                                            class="fas fa-play mr-2"></i>Leer Más</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </section> --}}
    {{-- <div>
        <div class="container">
            <h5 class="mb-3">Nuestra revista más actual</h5>
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
                            <li class="list-group">
                                <a href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}" class="text-primary">
                                    {{ $articulo->TITULO_ARTICULOS }}
                                </a>
                                <span class="text-muted">Fecha: {{ $articulo->FECHA_ARTICULOS }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div> --}}

@endsection

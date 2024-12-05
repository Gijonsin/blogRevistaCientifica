@extends('layout.vista_menu')

@section('title', 'Actual')

@section('content')
<section class="light">
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">{{ $archivo->TITULO_REVISTAS }}</div>
        <p class="text-center">Volumen: {{ $archivo->VOLUMEN_REVISTAS }}</p>
        <p class="text-center">Número: {{ $archivo->NUMERO_REVISTAS }}</p>
        <p class="text-center">Fecha: {{ $archivo->FECHA_REVISTAS }}</p>

        <h2 class="text-center">Artículos asociados</h2>
        @if ($archivo->articulos->isEmpty())
            <p class="text-center">No hay artículos asociados a esta revista.</p>
        @else
            @foreach ($archivo->articulos as $articulo)
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue">
                            <a href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}">{{ $articulo->TITULO_ARTICULOS }}</a>
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
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{ $articulo->FECHA_ARTICULOS }}</li>
                            <li class="tag__item play blue">
                                <a href="{{ route('articulo.detalle', $articulo->ID_ARTICULOS) }}"><i class="fas fa-play mr-2"></i>Leer Más</a>
                            </li>
                        </ul>
                    </div>
                </article>
            @endforeach
        @endif
    </div>
</section>
@endsection

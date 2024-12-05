@extends('layout.vista_menu')

@section('title', 'Archivos')

@section('content')
<section class="light">
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">Revistas</div>

        @if ($archivos->isEmpty())
            <p>No hay revistas disponibles.</p>
        @else
            @foreach ($archivos as $archivo)
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue">
                            <a href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}">{{ $archivo->TITULO_REVISTAS }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="{{ $archivo->FECHA_REVISTAS }}">
                                <i class="fas fa-calendar-alt mr-2"></i>{{ $archivo->FECHA_REVISTAS }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            Volumen: {{ $archivo->VOLUMEN_REVISTAS }}<br>
                            Número: {{ $archivo->NUMERO_REVISTAS }}
                        </div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Revista</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{ $archivo->FECHA_REVISTAS }}</li>
                            <li class="tag__item play blue">
                                <a href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}"><i class="fas fa-play mr-2"></i>Leer Más</a>
                            </li>
                        </ul>
                    </div>
                </article>
            @endforeach
        @endif
    </div>
</section>

{{-- Paginación --}}
<div class="d-flex justify-content-center mt-4">
    {{ $archivos->links('pagination::bootstrap-4') }}
</div>
@endsection
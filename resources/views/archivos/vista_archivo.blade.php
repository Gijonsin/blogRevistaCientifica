@extends('layout.vista_menu')

@section('title', 'Archivos')

@section('content')
    {{-- <section class="light"> --}}
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">Revistas</div>

        @if ($archivos->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                <h4 class="alert-heading">¡No hay revistas disponibles!</h4>
                <p>Lo sentimos, en este momento no hay avisos disponibles. Por favor, vuelve más tarde.</p>
                <img src="{{ asset('images/pagina-no-encontrada (1).png') }}" alt="page" class="img-fluid w-25">
            </div>
        @else
            @foreach ($archivos as $archivo)
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue">
                            <a
                                href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}">{{ $archivo->TITULO_REVISTAS }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="{{ $archivo->FECHA_REVISTAS }}">
                                <i class="fas fa-calendar-alt me-2"></i>{{ $archivo->FECHA_REVISTAS }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            Volumen: {{ $archivo->VOLUMEN_REVISTAS }}<br>
                            Número: {{ $archivo->NUMERO_REVISTAS }}
                        </div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag me-2"></i>Revista</li>
                            <li class="tag__item"><i class="fas fa-clock me-2"></i>{{ $archivo->FECHA_REVISTAS }}</li>
                            <li class="tag__item play blue">
                                <a href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}"><i
                                        class="fas fa-play me-2"></i>Leer Más</a>
                            </li>
                        </ul>
                    </div>
                </article>
            @endforeach
            {{-- Paginación --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $archivos->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>
    {{-- </section> --}}


@endsection

@extends('layout.vista_menu')

@section('title', 'Lista de Avisos')

@section('content')

    <div id="content" class="container mt-4">
        <h1 class="mb-4">Lista de Avisos</h1>

        @if ($avisos->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                <h4 class="alert-heading">¡No hay avisos disponibles!</h4>
                <p>En este momento no hay avisos disponibles. Por favor, vuelve más tarde.</p>
                <img src="{{ asset('images/pagina-no-encontrada (1).png') }}" alt="page" class="img-fluid w-25">
            </div>
        @else
            <div class="row">
                @foreach ($avisos as $aviso)
                    <div class="col-md-6 mb-4"
                        onclick="window.location.href='{{ route('avisos.show', $aviso->ID_AVISOS) }}'">
                        <div class="card card-hover-shadow">
                            <div class="card-header">{{ $aviso->user->name }}</div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>{{ $aviso->TITULO_AVISOS }}</p>
                                    <footer class="blockquote-footer">Publicado:
                                        {{ date('d/m/Y', strtotime($aviso->CREADO_AVISOS)) }}
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Paginación --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $avisos->links('pagination::bootstrap-4') }}
            </div>


        @endif
    </div>

@endsection

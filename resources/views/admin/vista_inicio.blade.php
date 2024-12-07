@extends('layout.vista_menu_admin')

@section('title', 'Archivos Admin')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Revistas</h1>
        <div class="row">
            @foreach ($archivos as $archivo)
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $archivo->TITULO_REVISTAS }}</h5>
                            {{-- <p class="card-text">{{ $archivo->descripcion }}</p> --}}
                            <a {{-- href="{{ route('admin.archivos.show', $archivo->id) }}"  --}} class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- {{ $archivos->links() }} --}}
        {{-- Paginación --}}
        
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $archivos->links('pagination::bootstrap-4') }}
    </div>
@endsection

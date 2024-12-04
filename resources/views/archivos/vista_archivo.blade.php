@extends('layout.vista_menu')

@section('title', 'Archivos')

@section('content')
<div class="row">
    @if ($archivos->isEmpty())
    <p>No hay revistas disponibles.</p>
    @else
    @foreach ($archivos as $archivo)
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('revistas.show', $archivo->ID_REVISTAS) }}">
                        {{ $archivo->TITULO_REVISTAS }}
                    </a>
                </h5>
                <p class="card-text">Volumen: {{ $archivo->VOLUMEN_REVISTAS }}</p>
                <p class="card-text">Número: {{ $archivo->NUMERO_REVISTAS }}</p>
                <p class="card-text">Fecha: {{ $archivo->FECHA_REVISTAS }}</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

{{-- Paginación --}}
<div class="d-flex justify-content-center mt-4">
    <!-- {{ $archivos->links() }} -->
    {{ $archivos->links('pagination::bootstrap-4') }}
</div>
@endsection
@extends('layout.vista_menu')

@section('title', 'Información Personal')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información Personal') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('investigadores.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="NOMBRE_INVESTIGADORES" class="form-label">{{ __('Nombre') }}</label>
                            <input id="NOMBRE_INVESTIGADORES" type="text" class="form-control" name="NOMBRE_INVESTIGADORES" required>
                        </div>

                        <div class="mb-3">
                            <label for="APELLIDO_INVESTIGADORES" class="form-label">{{ __('Apellido') }}</label>
                            <input id="APELLIDO_INVESTIGADORES" type="text" class="form-control" name="APELLIDO_INVESTIGADORES" required>
                        </div>

                        <div class="mb-3">
                            <label for="UNIVERSIDAD_INVESTIGADORES" class="form-label">{{ __('Universidad') }}</label>
                            <input id="UNIVERSIDAD_INVESTIGADORES" type="text" class="form-control" name="UNIVERSIDAD_INVESTIGADORES" required>
                        </div>

                        <div class="mb-3">
                            <label for="ORCID_INVESTIGADORES" class="form-label">{{ __('ORCID') }}</label>
                            <input id="ORCID_INVESTIGADORES" type="text" class="form-control" name="ORCID_INVESTIGADORES" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar Información') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
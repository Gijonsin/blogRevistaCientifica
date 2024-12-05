{{-- @extends('layout.vista_menu')

@section('title', 'Subir Aviso')

@section('content')
    <div id="content" class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Subir Aviso</h4>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div class="toast align-items-center text-bg-success border-0" role="alert"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            {{ session('message') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div class="toast align-items-center text-bg-danger border-0" role="alert"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            {{ session('error') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form id="avisoForm" action="{{ route('avisos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título del Aviso</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido del Aviso</label>
                                <div id="editor" style="height: 300px; border: 1px solid #ccc;"></div>
                                <input type="hidden" id="contenido" name="contenido">
                            </div>
                            <button type="submit" class="btn btn-success">Subir Aviso</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layout.vista_menu')

@section('title', 'Subir Aviso')

@section('content')
    <div id="content" class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Subir Aviso</h4>
                    </div>
                    <div class="card-body">
                        <!-- Toasts -->
                        {{-- @if (session('message'))
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div class="toast align-items-center text-bg-success border-0" role="alert"
                                    aria-live="assertive" aria-atomic="true" id="successToast">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            {{ session('message') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div class="toast align-items-center text-bg-danger border-0" role="alert"
                                    aria-live="assertive" aria-atomic="true" id="errorToast">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            {{ session('error') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        @endif --}}

                        <!-- Formulario -->
                        <form id="avisoForm" action="{{ route('avisos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título del Aviso</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido del Aviso</label>
                                <div id="editor" style="height: 300px; border: 1px solid #ccc;"></div>
                                <input type="hidden" id="contenido" name="contenido">
                            </div>
                            <button type="submit" class="btn btn-success">Subir Aviso</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

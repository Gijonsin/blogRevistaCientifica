@extends('layout.vista_menu')

@section('title', 'Envios')

@section('content')
    <div id="content" class="container mt-4">
        @if (!Auth::check())
            <div class="alert alert-warning" role="alert">
                Para enviar elementos en línea y verificar el estado de tus envíos recientes, es necesario que te registres
                o inicies sesión.
                Accede a tu cuenta existente o crea una nueva cuenta.
            </div>
        @else
            <form action="{{ route('envios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="TITULO_ARTICULOS" class="form-label">Título del Artículo</label>
                    <input type="text" class="form-control" id="TITULO_ARTICULOS" name="TITULO_ARTICULOS" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="ISSN_ARTICULOS" class="form-label">ISSN del Artículo</label>
                            <input type="text" class="form-control" id="ISSN_ARTICULOS" name="ISSN_ARTICULOS" maxlength="9"
                                required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="FECHA_ARTICULOS" class="form-label">Fecha de Publicación</label>
                            <input type="date" class="form-control" id="FECHA_ARTICULOS" name="FECHA_ARTICULOS" required>
                        </div>
                    </div>

                    <div class="col-4">
                        
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="RESUMEN_ARTICULOS" class="form-label">Resumen del Artículo</label>
                    <textarea class="form-control" id="RESUMEN_ARTICULOS" name="RESUMEN_ARTICULOS" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="PALABRAS_ARTICULOS" class="form-label">Palabras Clave (separadas por comas)</label>
                    <input type="text" class="form-control" id="PALABRAS_ARTICULOS" name="PALABRAS_ARTICULOS">
                </div>

                <input type="hidden" id="ESTADO_ARTICULOS" name="ESTADO_ARTICULOS" value="pendiente">

                <div class="mb-3">
                    <label for="DOI_ARTICULOS" class="form-label">DOI del Artículo</label>
                    <input type="text" class="form-control" id="DOI_ARTICULOS" name="DOI_ARTICULOS" required>
                </div>
                <div class="mb-3">
                    <label for="URL_ARTICULOS" class="form-label">URL del Artículo</label>
                    <input type="url" class="form-control" id="URL_ARTICULOS" name="URL_ARTICULOS" required>
                </div>
                <button type="submit" class="btn btn-success">Enviar Artículo</button>
            </form>
        @endif
    </div>
@endsection
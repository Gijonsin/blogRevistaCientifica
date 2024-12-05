@extends('layout.vista_menu')

@section('title', 'Contacto')

@section('content')
    @extends('layout.vista_menu')

@section('title', 'Contacto')

@section('content')
    <div id="content" class="container mt-4 mb-5">
        <h1 class="text-center mb-4">Contacto</h1>

        <div class="row">
            <div class="col-md-6">
                <h3>Información de Contacto</h3>
                <p><strong>Dirección:</strong></p>
                <p>Instituto Tecnológico de la Laguna<br>
                    Blvd. Revolución y Av. Instituto Tecnológico de La Laguna<br>
                    Torreón, Coahuila<br>
                    C.P. 27000</p>

                <p><strong>Correo Electrónico:</strong></p>
                <p><a href="mailto:contacto@revistacientifica.com">contacto@revistacientifica.com</a></p>

                <p><strong>Teléfono:</strong></p>
                <p>+52 871 123 4567</p>
            </div>

            <div class="col-md-6">
                <h3>Formulario de Contacto</h3>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layout.vista_menu')

@section('title', 'Registro')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Registro de Usuario</h3>
                    </div>
                    <div class="card-body">
                        <form id="registerForm" action="{{ route('validar-registro') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('actual.vista_actual') }}" class="btn btn-secondary">Regresar al Inicio</a>
    </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var passwordConfirmation = document.getElementById('password_confirmation').value;

            if (password !== passwordConfirmation) {
                event.preventDefault();
                alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.');
            }
        });
    </script>
@endsection

@extends('layout.vista_menu')

@section('title', 'Registro')

@section('content')

    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('images/Registro.svg') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-10 col-lg-5 col-xl-5">
                <div class="card">
                    <div class="card-body p-5">
                        <h4 class="card-title text-center mb-4">Crear una cuenta</h4>
                        <form id="registerForm" action="{{ route('validar-registro') }}" method="POST">
                            @csrf

                            {{-- Informacion del investigador  --}}
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control form-control-lg" id="nombre" name="nombre"
                                    placeholder=" " required>
                                <label for="nombre">Nombre(s)</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control form-control-lg" id="apellido" name="apellido"
                                    placeholder=" " required>
                                <label for="apellido">Apellidos</label>
                            </div>

                            <input type="hidden" class="form-control form-control-lg" id="universidad" name="universidad"
                                value="Instituto Tecnológico de La Laguna">

                            <div class="form-floating mb-4">
                                <input type="url" class="form-control form-control-lg" id="orcid" name="orcid"
                                    placeholder=" " required>
                                <label for="orcid">ORCID</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="name" name="name" placeholder=" "
                                    required>
                                <label for="name">Usuario</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder=" "
                                    required>
                                <label for="email">Correo Electrónico</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder=" "
                                    required>
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder=" " required>
                                <label for="password_confirmation">Confirmar Contraseña</label>
                            </div>

                            <!-- Submit button -->
                            <div class="text-center pt-1 mb-5 pb-1">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Registrar</button>
                            </div>

                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                <a href="{{ route('usuarios.vista_login') }}" class="btn btn-outline-primary">Iniciar
                                    sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

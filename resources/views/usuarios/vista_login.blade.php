@extends('layout.vista_menu')

@section('title', 'Login')

@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('images/Inicio_sesion.svg') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-10 col-lg-5 col-xl-5">
                <div class="card">
                    <div class="card-body p-5">
                        <h4 class="card-title text-center mb-4">Iniciar Sesión</h4>
                        <form method="POST" action="{{ route('inicia-sesion') }}">
                            @csrf
                            <!-- Email input -->
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control form-control-lg" id="email" name="email"
                                    placeholder=" " required>
                                <label for="email">Usuario o Correo Electronico</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control form-control-lg" id="password" name="password"
                                    placeholder=" " required>
                                <label for="password">Contraseña</label>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                        checked />
                                    <label class="form-check-label" for="form1Example3"> Recuerdame </label>
                                </div>
                                <a href="#!">Forgot password?</a>
                            </div>

                            <!-- Submit button -->
                            <div class="text-center pt-1 mb-5 pb-1">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Iniciar sesión</button>
                            </div>

                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                <a href="{{ route('usuarios.vista_register') }}" class="btn btn-outline-primary">Crear nueva</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

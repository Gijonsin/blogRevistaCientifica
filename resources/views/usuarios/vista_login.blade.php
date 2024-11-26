<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <h4>Iniciar Sesión</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="text-decoration-none">Olvidé mi contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @vite(['resources/js/app.js'])
    </body>
    </html>
    <div class="text-center mt-3">
        <a href="{{route('inicio.vista_inicio')}}" class="btn btn-secondary">Regresar al Inicio</a>
    </div>
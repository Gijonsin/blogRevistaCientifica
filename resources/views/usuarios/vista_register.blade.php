
    <!DOCTYPE html>
    <html lang="en">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Registro de Usuario</title>
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
         <div class="container mt-5">
              <div class="row justify-content-center">
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-header text-center">
                                    <h3>Registro de Usuario</h3>
                              </div>
                              <div class="card-body">
                                    <form action="#" method="POST">
                                         @csrf
                                         <div class="form-group">
                                              <label for="name">Nombre</label>
                                              <input type="text" class="form-control" id="name" name="name" required>
                                         </div>
                                         <div class="form-group">
                                              <label for="email">Correo Electrónico</label>
                                              <input type="email" class="form-control" id="email" name="email" required>
                                         </div>
                                         <div class="form-group">
                                              <label for="password">Contraseña</label>
                                              <input type="password" class="form-control" id="password" name="password" required>
                                         </div>
                                         <div class="form-group">
                                              <label for="password_confirmation">Confirmar Contraseña</label>
                                              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                         </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                                        </div>      </form>
                              </div>
                         </div>
                    </div>
              </div>
         </div>
    </body>
    </html>
    <div class="text-center mt-3">
        <a href="{{route('inicio.vista_inicio')}}" class="btn btn-secondary">Regresar al Inicio</a>
    </div>
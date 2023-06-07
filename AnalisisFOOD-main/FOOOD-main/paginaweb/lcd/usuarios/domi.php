<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="stylesregistro.css">
</head>
<body>
    <section id="register">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <div class="card">
                <div class="card-header bg-white text-center">
                  <h3 class="mb-0" style="color: rgb(6, 6, 6);">Registro</h3>
                </div>
                <div class="card-body">
                  <form action="formulario_registro.html" method="post">
                    <div class="form-group">
                      <label for="register-nombre" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>nombre</h4></label>
                      <input type="nombre" id="register-nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="register-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>correo</h4></label>
                      <input type="email" id="register-password" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="register-contraseña" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>contraseña</h4></label>
                      <input type="password" id="register-password" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="register-placa" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>placa de tu moto</h4></label>
                      <input type="placa" id="register-placa" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-purple" type="submit">Registrarse</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>


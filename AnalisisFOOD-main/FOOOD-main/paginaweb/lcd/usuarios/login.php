<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión - Tu sitio web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styleslogin.css">
</head>
<body>
  <img class="logo" src="img/logoo.png" alt="Logo">
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="card">
            <div class="card-header bg-white text-center">
              <h3 class="mb-0" style="color: rgb(6, 6, 6);">Inicia sesión</h3>
            </div>
            <div class="card-body">
              <form action="validarlogin.php" method="post">
              <div class="form-group">
                  <label for="nombre" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>nombre</h4></label>
                  <input type="nombre" name="nombre" id="nombre" class="form-control" required>
                </div>
              <div class="form-group">
                  <label for="login-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>Correo electrónico</h4></label>
                  <input type="email" name="correo" id="correo" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="login-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>Contraseña</h4></label>
                  <input type="password" name= "contraseña" id="contraseña" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <button class="btn btn-purple"><a href="index.php" href="#" style="color: white; font-weight: bold;">Iniciar sesión</a></button>
                </div>
              </form>
              
              <div class="text-center">
                <p class="mb-0">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
                <p class="mb-0">Ingresar como:
                    <button class="btn btn-purple"><a href="domi.php" href="#" style="color: white; font-weight: bold;">Domiciliario</a></button> 
                    <button class="btn btn-purple"><a href="vendedor.php"href="#" style="color: white; font-weight: bold;">Vendedor</a></button> 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://kit.fontawesome.com/c2938aea4b.js" crossorigin="anonymous"></script>
</body>

</html>




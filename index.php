<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Vista/Css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="Vista/fontawesome/css/all.css"> <!--Iconos-->
    <link rel="stylesheet" type="text/css" href="Vista/Css/Style.css">
    <script type="text/javascript" src="Vista/Script/jquery.js"></script>
    <script src="Vista/Script/script.js" ></script>
    <title>Bienvenido a Prueba Devco</title>
  </head>
  <body background="Vista/Img/fondogris.jpg">
    <section id="principal">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center ">
              <!-- alertas -->
                <?php
                  if ($x==1)
                      echo '<div class="alert alert-danger text-center">Error de usuario y/o contraseña no se encuentra registrado en la base de datos</div>';
                  if ($x==2)
                      echo '<div class="alert alert-info text-center">El Usuario ha cerrado sesión correctamente</div>';
                  if ($x==3)
                      echo '<div class="alert alert-danger text-center">Por favor contactar al administrador del sistema o enviar correo javier_castillo_15@hotmail.es</div>';
                ?>
            </div>
          <div class="col-3 col-sm-4">
          </div>
          <div class="col-6 col-sm-4">
            <div class="borde">
              <div class="modal-header">
                <h5 class="modal-title col-11 text-center" id="titmodals">Iniciar Sesión Prueba Devco</h5>
              </div>
              <div class="mx-auto tw">
              <div class="modal-body">
                  <span class="n fas fa-user-lock fa-10x"></span>
                  <form action="Controlador/ValidarInicioSesion.php" method="post">
                  <input style="border-radius: 20px;" type="email" placeholder="Usuario/Correo" name="usuario" />
                  <input style="border-radius: 20px;" type="password" placeholder="Contraseña" name="clave" />
                  <button style="margin-top:10px;" type="submint" class="btn btn-dark">Ingresar</button>
                    <p style="font-size:20px font-weight:600; margin-top:10px"><a href="index.php?x=3">Olvide la Contraseña?</a></p>
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 col-sm-4">
          </div>
        </div>
      </div>
    </section>
    <section id="principal" class="pt-3">
    </section>
    <footer class="bg-dark small text-center text-white-50">
      <div class="container-fluid">
        
      </div>
    </footer>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script src="Vista/js/scripts.js"></script>
  </body>
  </body>
</html>
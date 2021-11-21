<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Candidato.php";

$clase = new Candidato;

  $resultado=$clase->ConsultaCandidato($_GET['cedula']);
      while($registro=$resultado->fetch_object())
{
    $ced = $registro->cedula;
    $nom = $registro->nombre;
    $ape = $registro->apellido;
    $cor = $registro->correo;
    $rol = $registro->rol;
    $fec = $registro->fec_post;
    $salario = $registro->asp_sal;
    $com = $registro->coment;
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="../Css/Style.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css"> <!--Iconos-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        alert("Consulta exitosa");
      </script>
      <script src="../Script/script.js" ></script>
    <title>Actualizar Candidato</title>
  </head>
  <body class="text-black" background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="ConsultarCandidato.php"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Back_Arrow.svg/240px-Back_Arrow.svg.png" width="60" height="60" class="img-fluid" data-toggle="tooltip" title="Regresar a consulta"></a>
            <a class=" float-right" href="../salir.php"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Font_Awesome_5_solid_sign-out-alt.svg" width="60" height="60" align="bottom"class="img-fluid" data-toggle="tooltip" title="Salir"></a>
            <h1 class="text-center m-3">Actualizar Candidato</h1>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-4">
          </div>
          <div class="col-4 tf" style="margin-bottom: 60px;">
          <form action="../../Controlador/UpdateCandidato.php" method="POST">            
                      <input type="number" value="<?php echo $ced;?>" id="cedula" name="cedula" class="form-control" disabled>
                      <label>Nombre:</label>
                      <input type="Text" class="form-control" value="<?php echo $nom;?>" name="nombre" id="nombre" required>
                      <label>Apellido:</label>
                      <input type="Text" class="form-control" value="<?php echo $ape;?>" name="apellido" id="apellido" required>
                      <label>Correo:</label>
                      <input type="email" class="form-control" value="<?php echo $cor;?>" name="correo" id="correo" required>
                      <label>Rol:</label>
                      <select class="form-control" id="rol" name="rol">
                        <option><?php echo $rol;?></option>
                        <option>Devops</option>
                        <option>Desarrollador</option>
                        <option>Automatizador de pruebas</option>
                      </select>
                      <label>Fecha Postulación:</label>
                      <input type="date" class="form-control" value="<?php echo $fec;?>" id="fecPost" name="fecPost" required>
                      <label for="salario">Aspiración Salarial:</label>
                      <output id="outsalario" name="outsalario" for="salario"><?php echo $salario;?></output>
                      <input type="range" class="form-control" id="salario" name="salario" min="500000" max="5000000" step="50000" value="<?php echo $salario;?>" onchange="document.getElementById('outsalario').value=value">                      
                      <label>Comentarios:</label>
                      <textarea type="Text" class="form-control" name="com" id="com"><?php echo $com;?></textarea><br>
                      <button type="submint" class="btn btn-info btn-block" style="">Guardar</button>
                      <input type="text" value="<?php echo $ced;?>" class="form-control d-none" id="cedula" name="cedula">
          </div>
          <div class="col-3 tf" style="margin-bottom: 60px;">
          <div class="col-12 b-3 p-3">
          </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="fixed-bottom bg-dark">
        <h5 class="tb">Todos los derechos reservados &copy. Prueba Para Devco (Nov-2021)</h5>
       </div>
    </footer>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
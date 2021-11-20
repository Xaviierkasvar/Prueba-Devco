<?php
session_start();
extract ($_REQUEST);
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Candidato.php";
if (!isset($_REQUEST['msj']))
  $msj=0;
  $fin="FINALIZAR";
$clase = new Candidato;
$resultado=$clase->ConsultaEstado();             
    while($registro=$resultado->fetch_object())
{
    $est = $registro->estado;
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Gestión</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body background="">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="ConsultarCandidato.php"><img  src="../img/add.png" width="50" height="50"></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h2 class="text-center text-black m-3">Gestión de Candidatos</h2>    
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <?php
              if ($msj==1)
                 echo '<br><br><div class="alert alert-info text-center">Avance de candidato exitoso</div>';
               if ($msj==2)
                 echo '<br><br><div class="alert alert-danger text-center">Error al intentar registrar Avance</div>';
               if ($msj==3)
                 echo '<br><br><div class="alert alert-info text-center">Finalizació de candidato exitoso</div>';
              ?>  
          </div>
          <div class="col-12 ">
            <table class="table center table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No. Cedula</th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Rol</th>
                  <th scope="col">Fecha de Postulación</th>
                  <th scope="col">Aspiración Salarial</th>
                  <th scope="col">Comentario</th>
                  <th scope="col">Estado Actual</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      $resultado=$clase->ConsultaCandidatos();
                      while($registro = $resultado->fetch_array()){
                      echo '<tr>
                          <td><span id="firstname'.$registro['cedula'].'">'.$registro['cedula'].'</span></td>
                          <td>'.$registro['nombre'].'</td>
                          <td>'.$registro['apellido'].'</td>
                          <td>'.$registro['correo'].'</td>
                          <td>'.$registro['rol'].'</td>
                          <td>'.$registro['fec_post'].'</td>
                          <td>'.$registro['asp_sal'].'</td>
                          <td>'.$registro['coment'].'</td>
                          <td>'.$registro['estado'].'</td>
                          <td><a class="btn d-inline btn-primary" href="VerEstado.php?cedula='.$registro['cedula'].'">Ver</a><a class="btn d-inline btn-success" href="../../Controlador/ValidarEstado.php?cedula='.$registro['cedula'].'&estado='.$registro['estado'].'">Avanzar</a><a class="btn d-inline btn-danger" href="../../Controlador/ValidarEstado.php?cedula='.$registro['cedula'].'&estado='.$fin.'">Finalizar</a></td>
                        </tr>';}
                      ?>
              </tbody>
            </table>
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
           
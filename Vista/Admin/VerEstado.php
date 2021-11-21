<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Candidato.php";
$ced=$_GET['cedula'];

$clase = new Candidato;
$resultado=$clase->ConsultaCandidato($ced);             
    while($registro=$resultado->fetch_object())
{
    $nom = $registro->nombre;
    $ape = $registro->apellido;
    $cor = $registro->correo;
    $rol = $registro->rol;
    $fec = $registro->fec_post;
    $asp = $registro->asp_sal;
    $com = $registro->coment;

}
$resultado=$clase->ConsultaCandidatoEtp1($ced);             
    while($registro=$resultado->fetch_object())
{
    $pteo = $registro->cal_pteo;
    $ptec = $registro->cal_ptec;
    $com1 = $registro->coment;
    $nom1 = $registro->nom_eva;

}
$resultado=$clase->ConsultaCandidatoEtp2($ced);             
    while($registro=$resultado->fetch_object())
{
    $psi = $registro->cal_psi;
    $med = $registro->cal_med;
    $com2 = $registro->coment;
    $nom2 = $registro->nom_eva;
}
$resultado=$clase->ConsultaCandidatoEtp3($ced);             
    while($registro=$resultado->fetch_object())
{
    $pro = $registro->cal_pro;
    $acu = $registro->sal_fin;
    $fecini = $registro->fec_ini;
    $com3 = $registro->coment;

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
    <title>Gestión</title>
  </head>
  <body background="">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Consulta.php"><i class="n fas fa-arrow-circle-left fa-4x"></i></a>
            <a class=" float-right" href="../salir.php"><i class="n fas fa-sign-out-alt fa-4x"></i></a>
            <h2 class="text-center text-white m-3">Avances del Candidato</h2>    
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-2 text-center">
          </div>
          <!-- Tabla Info Candidato -->
          <div class="col-12 ">
            <table class="table table-bordered text-center">
              <thead class="table-info">
                <tr>
                  <th scope="col">No. Cedula</th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Rol</th>
                  <th scope="col">Fecha de Postulación</th>
                  <th scope="col">Aspiración Salarial</th>
                  <th scope="col">Comentario</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      echo '<tr>
                          <td>'.$ced.'</td>
                          <td>'.$nom.'</td>
                          <td>'.$ape.'</td>
                          <td>'.$cor.'</td>
                          <td>'.$rol.'</td>
                          <td>'.$fec.'</td>
                          <td>'.$asp.'</td>
                          <td>'.$com.'</td>
                        </tr>';

                      ?>
              </tbody>
            </table>
        </div>
        <!-- Fin Info Candidato -->
        <!-- Tabla info Etapa 1 --> 
        <div class="col-12 ">
            <table class="table table-bordered text-center">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Calificación prueba teórica</th>
                  <th scope="col">Calificación prueba técnica</th>
                  <th scope="col">Comentarios</th>
                  <th scope="col">Nombre del evaluador</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      echo '<tr>
                          <td>'.$pteo.'</td>
                          <td>'.$ptec.'</td>
                          <td>'.$com1.'</td>
                          <td>'.$nom1.'</td>
                        </tr>';

                      ?>
              </tbody>
            </table>
        </div>
        <!-- Fin Info Etapa 1 -->
        <!-- Tabla Info Etapa 2 -->
          <div class="col-12 ">
            <table class="table table-bordered text-center">
              <thead class="table-secondary">
                <tr>
                  <th scope="col">Calificación entrevista psicológica</th>
                  <th scope="col">Calificación entrevista médica</th>
                  <th scope="col">Comentarios</th>
                  <th scope="col">Nombre del evaluador</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      echo '<tr>
                          <td>'.$psi.'</td>
                          <td>'.$med.'</td>
                          <td>'.$com2.'</td>
                          <td>'.$nom2.'</td>
                        </tr>';
                      ?>
              </tbody>
            </table>
        </div>
        <!-- Fin Info Etapa 2 -->
        <!-- Tabla Info Etapa 3-->
          <div class="col-12 ">
            <table class="table table-bordered text-center">
              <thead class="table-success">
                <tr>
                  <th scope="col">Puntaje promedio del proceso</th>
                  <th scope="col">Salario final acordado</th>
                  <th scope="col">Día de ingreso acordado a la compañía</th>
                  <th scope="col">Comentario</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      echo '<tr>
                          <td>'.$pro.'</td>
                          <td>'.$acu.'</td>
                          <td>'.$fecini.'</td>
                          <td>'.$com3.'</td>
                        </tr>';
                      ?>
              </tbody>
            </table>
        </div>
        <!-- Fin Info Etapa 3 -->
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

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
      <script src="../Script/script.js" ></script>
    <title>Etapa 2</title>
  </head>
  <body class="text-black" background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Consulta.php"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Back_Arrow.svg/240px-Back_Arrow.svg.png" width="60" height="60" class="img-fluid" data-toggle="tooltip" title="Regresar a panel"></a>
            <a class=" float-right" href="../salir.php"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Font_Awesome_5_solid_sign-out-alt.svg" width="60" height="60" align="bottom"class="img-fluid" data-toggle="tooltip" title="Salir"></a>
            <h1 class="text-center m-3">Resultados Etapa 2</h1>            
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
                      <form action="../../Controlador/RegistrarEtapa2.php" method="POST">
                      <label>Nombre:</label>
                      <input type="Text" value="<?php echo $nom,'&nbsp;',$ape;?>" class="form-control" name="nombre" id="nombre" disabled>
                      <label>Correo:</label>
                      <input type="Text" value="<?php echo $cor;?>" class="form-control" name="correo" id="correo" disabled>
                      <label for="cpsi">Calificación entrevista psicológica:</label>
                      <output id="outcpsi" name="outcpsi" for="cpsi">0</output>
                      <input type="range" class="form-control" id="cpsi" name="cpsi" min="0" max="10" step="0.5" value="0" onchange="document.getElementById('outcpsi').value=value">
                      <label for="cmed">Calificación entrevista médica:</label>
                      <output id="outcmed" name="outcmed" for="cmed">0</output>
                      <input type="range" class="form-control" id="cmed" name="cmed" min="0" max="10" step="0.5" value="0" onchange="document.getElementById('outcmed').value=value">                    
                      <label>Comentarios:</label>
                      <textarea type="Text" class="form-control" name="com" id="com"></textarea>
                      <label>Nombre del evaluador:</label>
                      <input type="Text" class="form-control" id="nom_eva" name="nom_eva" required><br>
                      <button type="submint" class="btn btn-info btn-block" style="">Guardar</button>
                      <input type="text" value="<?php echo $ced;?>" class="form-control d-none" id="cedula" name="cedula">
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
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
$resultado=$clase->ConsultaCandidatos();             
    while($registro=$resultado->fetch_object())
{
    $nom = $registro->nombre;
    $ape = $registro->apellido;
    $cor = $registro->correo;
    $acu = $registro->asp_sal;
}
$resultado=$clase->ConsultaCandidatoEtp1($ced);             
    while($registro=$resultado->fetch_object())
{
    $pteo = $registro->cal_pteo;
    $ptec = $registro->cal_ptec;
}
$resultado=$clase->ConsultaCandidatoEtp2($ced);             
    while($registro=$resultado->fetch_object())
{
    $psi = $registro->cal_psi;
    $med = $registro->cal_med;
}

$sum = $pteo + $ptec + $psi + $med;
$pro = $sum / 4;
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../Css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
      <script src="../Script/script.js" ></script>
    <title>Etapa 3</title>
  </head>
  <body background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Consulta.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h1 class="text-center m-3" style="color:white;">Resultados Etapa 3</h1>            
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
                      <form action="../../Controlador/RegistrarEtapa3.php" method="POST">
                      <label>Nombre:</label>
                      <input type="Text" value="<?php echo $nom,'&nbsp;',$ape;?>" class="form-control" name="nombre" id="nombre" disabled>
                      <label>Correo:</label>
                      <input type="Text" value="<?php echo $cor;?>" class="form-control" name="correo" id="correo" disabled>
                      <label for="pro">Puntaje promedio del proceso:</label>
                      <output id="outpro" name="outpro" for="pro"><?php echo $pro;?></output>
                      <input type="range" class="form-control" id="pro" name="pro" min="0" max="10" step="0.5" value="<?php echo $pro;?>" onchange="document.getElementById('outpro').value=value" disabled>
                      <label for="acu">Salario final acordado:</label>
                      <output id="outacu" name="outacu" for="acu"><?php echo $acu;?></output>
                      <input type="range" class="form-control" id="acuerdo" name="acuerdo" min="500000" max="5000000" step="50000" value="<?php echo $acu;?>" onchange="document.getElementById('outacu').value=value">   
                      <label>Día de ingreso acordado a la compañía:</label>
                      <input type="date" class="form-control" id="fecini" name="fecini">
                      <label>Comentarios:</label>
                      <textarea type="Text" class="form-control" name="coment" id="coment"></textarea><br>
                      <button type="submint" class="btn btn-info btn-block" style="">Guardar</button>
                      <input type="text" value="<?php echo $ced;?>" class="form-control dn" id="cedula" name="cedula">
                      <input type="text" value="<?php echo $pro;?>" class="form-control dn" id="promedio" name="promedio">
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
<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
if (!isset($_REQUEST['msj']))
  $msj=0;
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
    <title>Consultar Candidato</title>
  </head>
  <body background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Consulta.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h1 class="text-center m-3" style="color:white;">Consultar Candidato</h1>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
                        <?php
              if ($msj==1)
                 echo '<br><br><div class="alert alert-danger text-center">Candidato registrado exitosamente</div>';
               if ($msj==2)
                 echo '<br><br><div class="alert alert-info text-center">Error al intentar registrar el Candidato</div>';
               if ($msj==3)
                 echo '<br><br><div class="alert alert-danger text-center">Error al intentar actualizar el Candidato</div>';
               if ($msj==4)
                 echo '<br><br><div class="alert alert-info text-center">Candidato actualizado exitosamente</div>';
              ?>
                  <form class="tc" action="../../Controlador/ValidarCandidato.php" method="get">
                      <label>Identificacion:</label>
                      <input type="number" placeholder="Digite numero" class="form-control" name="cedula" id="cedula" >
                      <button type="submit" class="btn btn-info">Consultar</button><br>
                      <label>Nombre:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Apellido:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Correo:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Rol:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Rol:</label>
                      <select class="form-control" disabled id="rol" name="rol">
                        <option>Devops</option>
                        <option>Desarrollador</option>
                        <option>Automatizador de pruebas</option>
                      </select>
                      <label>Fecha Postulación:</label>
                      <input type="date" class="form-control" disabled id="fecPost" name="fecPost">
                      <label for="salario">Aspiración Salarial:</label>
                      <output id="outsalario" name="outsalario" for="salario">2500000</output>
                      <input type="range" class="form-control" disabled id="salario" name="salario" min="500000" max="5000000" step="50000" value="2500000" onchange="document.getElementById('outsalario').value=value">                      
                      <label for="pteo">Calificación prueba teórica:</label>
                      <output id="outpteo" name="outpteo" for="pteo">0</output>
                      <input type="range" class="form-control" disabled id="pteo" name="pteo" min="0" max="10" step="0.5" value="0" onchange="document.getElementById('outpteo').value=value">
                      <label for="ptec">Calificación prueba técnica:</label>
                      <output id="outptec" name="outptec" for="ptec">0</output>
                      <input type="range" class="form-control" disabled id="ptec" name="ptec" min="0" max="10" step="0.5" value="0" onchange="document.getElementById('outptec').value=value">
                      <label>Comentarios:</label>
                      <textarea type="Text" class="form-control" disabled name="com" id="com"></textarea>
                      <label>Nombre del evaluador:</label>
                      <input type="Text" class="form-control" disabled id="NomEva" name="NomEva"><br>
                  </form>
          </div>
          <div class="col-12 b-3 p-3">
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="fixed-bottom bg-dark">
        <h5 class="tb" style="font-size: 10px;">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
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
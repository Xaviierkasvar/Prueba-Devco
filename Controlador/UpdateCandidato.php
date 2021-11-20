<?php
session_start();
extract($_POST); 
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";
ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
$obj=new Candidato();
$obj->CrearCandidato($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['rol'],$_POST['fecPost'],$_POST['salario'],$_POST['com']);
$resultado = $obj->ActualizarCandidato();
if ($resultado)
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=4");
else
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=3");

?>
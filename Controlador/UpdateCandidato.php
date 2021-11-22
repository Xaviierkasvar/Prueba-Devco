<?php
session_start();
extract($_GET); 
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";
$obj=new Candidato();
$obj->CambiarCandidato($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['correo'],$_GET['rol'],$_GET['fecPost'],$_GET['salario'],$_GET['com']);
$resultado = $obj->ActualizarCandidato();
if ($resultado)
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=4");
else
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=3");

?>
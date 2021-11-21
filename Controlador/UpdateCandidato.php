<?php
session_start();
extract($_POST); 
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";
$obj=new Candidato();
$obj->CambiarCandidato($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['rol'],$_POST['fecPost'],$_POST['salario'],$_POST['com']);
$resultado = $obj->ActualizarCandidato();
if ($resultado)
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=4");
else
	header ("location:../Vista/Admin/ConsultarCandidato.php?msj=3");

?>
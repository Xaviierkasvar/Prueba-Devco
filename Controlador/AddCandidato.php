<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$obj=new Candidato();
$obj->CrearCandidato($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['rol'],$_POST['fecPost'],$_POST['salario'],$_POST['com']);
$resultado=$obj->AgregarCandidato();
if ($resultado) 
	header("location:../Vista/Admin/ConsultarCandidato.php?msj=1");
else
	header("location:../Vista/Admin/ConsultarCandidato.php?msj=2");
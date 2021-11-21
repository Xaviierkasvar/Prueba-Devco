<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_POST['cedula'];
$obj=new Candidato();
$obj->CrearCandidato($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['rol'],$_POST['fecPost'],$_POST['salario'],$_POST['com']);
$resultado=$obj->AgregarCandidato();
if ($resultado) 
	header("location:NotificacionEtapa1.php?cedula=$cedula");
else
	header("location:../Vista/Admin/ConsultarCandidato.php?msj=2");
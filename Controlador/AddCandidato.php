<?php
session_start();
extract ($_GET);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_GET['cedula'];
$obj=new Candidato();
$obj->CrearCandidato($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['correo'],$_GET['rol'],$_GET['fecPost'],$_GET['salario'],$_GET['com']);
$resultado=$obj->AgregarCandidato();
if ($resultado) 
	header("location:NotificacionEtapa1.php?cedula=$cedula");
else
	header("location:../Vista/Admin/ConsultarCandidato.php?msj=2");
<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_POST['cedula'];

$obj=new Candidato();
$obj->CrearEtp1($cedula,$_POST['pteo'],$_POST['ptec'],$_POST['com'],$_POST['nom_eva']);
$resultado=$obj->AgregarEtp1();
if ($resultado) 
	header("location:NotificacionEtapa2.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
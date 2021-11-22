<?php
session_start();
extract ($_GET);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_GET['cedula'];

$obj=new Candidato();
$obj->CrearEtp1($cedula,$_GET['pteo'],$_GET['ptec'],$_GET['com'],$_GET['nom_eva']);
$resultado=$obj->AgregarEtp1();
if ($resultado) 
	header("location:NotificacionEtapa2.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
<?php
session_start();
extract ($_GET);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_GET['cedula'];

$obj=new Candidato();
$obj->CrearEtp2($_GET['cedula'],$_GET['cpsi'],$_GET['cmed'],$_GET['com'],$_GET['nom_eva']);
$resultado=$obj->AgregarEtp2();
if ($resultado) 
	header("location:NotificacionEtapa3.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
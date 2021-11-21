<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_POST['cedula'];

$obj=new Candidato();
$obj->CrearEtp2($_POST['cedula'],$_POST['cpsi'],$_POST['cmed'],$_POST['com'],$_POST['nom_eva']);
$resultado=$obj->AgregarEtp2();
if ($resultado) 
	header("location:NotificacionEtapa3.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
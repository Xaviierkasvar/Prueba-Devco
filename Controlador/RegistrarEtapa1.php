<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";

$obj=new Candidato();
$obj->CrearEtp1($_POST['cedula'],$_POST['pteo'],$_POST['ptec'],$_POST['com'],$_POST['nom_eva']);
$resultado=$obj->AgregarEtp1();
if ($resultado) 
	header("location:../Vista/Admin/Consulta.php?msj=1");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
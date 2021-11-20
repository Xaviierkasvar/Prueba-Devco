<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";

$obj=new Candidato();
$obj->CrearEtp2($_POST['cedula'],$_POST['cpsi'],$_POST['cmed'],$_POST['com'],$_POST['nom_eva']);
$resultado=$obj->AgregarEtp2();
if ($resultado) 
	header("location:../Vista/Admin/Consulta.php?msj=1");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
<?php
session_start();
extract ($_GET);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_GET['cedula'];

$obj=new Candidato();
$obj->CrearEtp3($_GET['cedula'],$_GET['promedio'],$_GET['acuerdo'],$_GET['fecini'],$_GET['coment']);
$resultado=$obj->AgregarEtp3();
if ($resultado) 
	header("location:NotificacionSelec.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
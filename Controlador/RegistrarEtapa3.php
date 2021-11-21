<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Candidato.php";
$cedula = $_POST['cedula'];

$obj=new Candidato();
$obj->CrearEtp3($_POST['cedula'],$_POST['promedio'],$_POST['acuerdo'],$_POST['fecini'],$_POST['coment']);
$resultado=$obj->AgregarEtp3();
if ($resultado) 
	header("location:NotificacionSelec.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
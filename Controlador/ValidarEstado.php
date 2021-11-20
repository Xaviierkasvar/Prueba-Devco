<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";
$obj=new Candidato();

$cedula = $_GET['cedula'];
$est = $_GET['estado'];


if($est == 'REGISTRADO'||'FINALIZADO' ){
	
	header("location:../Vista/Admin/RegistrarEtapa1.php?cedula=$cedula");
}
if($est == 'ETAPA_1'){
	
	header("location:../Vista/Admin/RegistrarEtapa2.php?cedula=$cedula");
}
if($est == 'ETAPA_2'){
	
	header("location:../Vista/Admin/RegistrarEtapa3.php?cedula=$cedula");
}
if($est == 'ETAPA_3'){
	
	header("location:../Vista/Admin/Consulta.php?msj=1");
}
if($est == 'FINALIZAR'){
	
	$obj->FinalizarCandidato($_GET['cedula']);
$resultado=$obj->FinalizarCandidato($cedula);
if ($resultado) 
	header("location:../Vista/Admin/Consulta.php?msj=1");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
}

?>
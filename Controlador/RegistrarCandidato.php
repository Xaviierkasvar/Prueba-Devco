<?php 
session_start();
extract ($_GET);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";
$obj=new Candidato();

$cedula = $_GET['cedula'];
$est = $_GET['estado'];

if($est == 'CREAR' ){
	$obj->CrearCandidato($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['correo'],$_GET['rol'],$_GET['fecPost'],$_GET['salario'],$_GET['com']);
	$resultado=$obj->AgregarCandidato();
	if ($resultado) 
		header("location:NotificacionEtapa1.php?cedula=$cedula");
	else
	header("location:../Vista/Admin/Consulta.php?msj=2");
}
if($est == 'UPDATE' ){
	$obj->CambiarCandidato($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['correo'],$_GET['rol'],$_GET['fecPost'],$_GET['salario'],$_GET['com']);
	$resultado = $obj->ActualizarCandidato();
	if ($resultado)
		header ("location:../Vista/Admin/Consulta.php?msj=5");
	else
	header("location:../Vista/Admin/ConsultarCandidato.php?msj=3");
}
?>
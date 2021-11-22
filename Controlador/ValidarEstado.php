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
}
if($est == 'UPDATE' ){
	$obj->CambiarCandidato($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['correo'],$_GET['rol'],$_GET['fecPost'],$_GET['salario'],$_GET['com']);
	$resultado = $obj->ActualizarCandidato();
	if ($resultado)
		header ("location:../Vista/Admin/Consulta.php?msj=5");
}
if($est == 'REGISTRADO'||'FINALIZADO' ){

	header("location:../Vista/Admin/RegistrarEtapa1.php?cedula=$cedula");

}
if($est == 'ETAPA_1'){
	
	header("location:../Vista/Admin/RegistrarEtapa2.php?cedula=$cedula");
	
}
if($est == 'ETAPA_2'){
	
	header("location:../Vista/Admin/RegistrarEtapa3.php?cedula=$cedula");
	
}
if($est == 'R_ETAPA_1' ){
	$obj->CrearEtp1($cedula,$_GET['pteo'],$_GET['ptec'],$_GET['com'],$_GET['nom_eva']);
	$resultado=$obj->AgregarEtp1();
	if ($resultado) 
		header("location:NotificacionEtapa2.php?cedula=$cedula");
	else
		header("location:../Vista/Admin/Consulta.php?msj=2");
}
if($est == 'R_ETAPA_2'){
	
	$obj->CrearEtp2($_GET['cedula'],$_GET['cpsi'],$_GET['cmed'],$_GET['com'],$_GET['nom_eva']);
	$resultado=$obj->AgregarEtp2();
	if ($resultado) 
		header("location:NotificacionEtapa3.php?cedula=$cedula");
	else
		header("location:../Vista/Admin/Consulta.php?msj=2");
}
if($est == 'R_ETAPA_3'){
	$obj->CrearEtp3($_GET['cedula'],$_GET['promedio'],$_GET['acuerdo'],$_GET['fecini'],$_GET['coment']);
	$resultado=$obj->AgregarEtp3();
	if ($resultado) 
		header("location:NotificacionSelec.php?cedula=$cedula");
	else
		header("location:../Vista/Admin/Consulta.php?msj=2");
}
if($est == 'ETAPA_3'){
	
	header("location:../Vista/Admin/VerEstado.php?cedula=$cedula");
}
if($est == 'FINALIZAR'){
	
	$obj->FinalizarCandidato($_GET['cedula']);
$resultado=$obj->FinalizarCandidato($cedula);
if ($resultado) 
	header("location:NotificacionAgra.php?cedula=$cedula");
else
	header("location:../Vista/Admin/Consulta.php?msj=2");
}

?>
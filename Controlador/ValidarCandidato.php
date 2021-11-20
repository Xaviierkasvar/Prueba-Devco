<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";

$clase = new Candidato;

  $resultado=$clase->ConsultarCandidato($_GET['cedula']);
$usuario = ($_GET['cedula']);

$filas=mysqli_num_rows($resultado);
if($filas > 0 ){
	header("location:../Vista/Admin/ActualizarCandidato.php?cedula=".$usuario."");
}
if($filas < 1){
	header("location:../Vista/Admin/AddCandidato.php?cedula=".$usuario."");
}
?>
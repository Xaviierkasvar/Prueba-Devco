<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";

$login= ($_POST['usuario']);
$clave= md5($_POST['clave']);

$objConexion=Conectarse();
$sql="select * from admin where USUARI_Correo_b='$login' and USUARI_Clave_b='$clave'";

$resultado=$objConexion->query($sql);

$filas=mysqli_num_rows($resultado);
if($filas == 1){
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user'] = $usuario->USUARI_Correo_b;
	header("location:../Vista/Admin/Consulta.php?USUARI_Correo_b=".$login."");
}
?>
<script type="text/javascript">
	window.location.href="../index.php?x=1";
</script>
<?php
function Conectarse()
{
	$objConexion = new mysqli("sql3.freemysqlhosting.net","sql3455105","Gm4TbIRq5v","sql3455105");
	if ($objConexion->connect_errno)
	{
		echo "Erro de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?>





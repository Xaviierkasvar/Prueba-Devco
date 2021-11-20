<?php
function Conectarse()
{
	$objConexion = new mysqli("sql3.freemysqlhosting.net","sql3452399","QpAuXKR8vY","sql3452399");
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





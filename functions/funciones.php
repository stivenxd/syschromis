<?php 
require("../principal/conexion.php");
conectar();

function obtenerCliente($ID)
{
	$consultaCliente="Select * from customers where ID='".$ID."'";
	$respuesta=mysql_query($consultaCliente);
	$datos=mysql_fetch_assoc($respuesta);
	
	return $datos;
	
}

?>
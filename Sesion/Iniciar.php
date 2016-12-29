<?php
require("../principal/conexion.php");
conectar();

if ($_POST['usuario']!='' && $_POST['password']!='')
{
$NAME=$_POST['usuario'];
$APPPASSWORD=$_POST['password'];
	
/* Realiza La Consulta del Usuario para iniciar la Session*/
$consultaUsuario ="select * from people where NAME ='".$NAME."' and APPPASSWORD ='".$APPPASSWORD."'";
$resultado=mysql_query($consultaUsuario);
$numero=mysql_num_rows($resultado);

/*Valida Si la consulta Trae 1 Usuario Encontrado*/	
if ($numero==1) 
{
$datos=mysql_fetch_array($resultado);
/*Tiempo de vida de la Session*/
ini_set("session.cookie_lifetime","10000");
/*Inicia la Session*/
session_start();	
/*Setea los datos del usuario encontrado a las variables de session*/
	$_SESSION['ID']=$datos['ID'];
	$_SESSION['NAME']=$datos['NAME'];
	$_SESSION['APPPASSWORD']=$datos['APPPASSWORD'];
	$_SESSION['ROLE']=$datos['ROLE'];
	$_SESSION['VISIBLE']=$datos['VISIBLE'];
	$_SESSION['IMAGE']=$datos['IMAGE'];
	$_SESSION['SITEGUID']=$datos['SITEGUID'];
	$_SESSION['SFLAG']=$datos['SFLAG'];
	$_SESSION['CARD']=$datos['CARD'];

header("Location:../principal/Principal.php");
}
else
{
header("Location:../Index.php?noExiste=noExiste");	
}
}
else
{
header("Location: ../Index.php?blanco=blanco");
}
?>
<?php 
	session_start();
	session_destroy();
	
	$dirección = "../Index.php"; //obtenemos la pagina en la que nos encontramos
header ("refresh:2; url=$dirección"); //refrescamos cada 2 seg.


PRINT <<<HERE
 

<center><img src="../image/cargando.gif"> </center>
<center><h3>Cerrando Sesion....</h3></center><br />

 
HERE;
	//header('Location: Principal.php');


?>
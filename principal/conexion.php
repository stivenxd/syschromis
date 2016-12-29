<?php
function conectar()
{
	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect('localhost','root','');
	mysql_select_db('chromis');	
}
?>
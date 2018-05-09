<?php
	class conexion{
		function conectarse(){
			/*$host = "localhost";
			$user = "id1650113_fullstack";
			$pw = "12345";
			$db= "id1650113_bdparejitas";*/

			$host = "localhost";
			$user = "root";
			$pw = "";
			$db= "prueba1";

			$cone = mysql_connect($host, $user, $pw) or die("Falla de conexion");
			mysql_select_db($db, $cone) or die ("No se encontro la base de datos");
			mysql_query("set names utf8");
			date_default_timezone_set('America/La_Paz');
			setlocale(LC_CTYPE, "es_ES");
			setlocale(LC_ALL, 'sp'); 
			setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
		}
	} 
?>
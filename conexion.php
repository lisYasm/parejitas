<?php
			/*$host = "localhost";
			$user = "id1650113_fullstack";
			$pw = "12345";
			$db= "id1650113_bdparejitas";*/

			$host = "localhost";
			$user = "root";
			$pw = "";
			$db= "prueba1";

			
			$conexion = new mysqli($host, $user, $pw, $db);
			if ($conexion->connect_errno) {
				echo "Error";
				exit();
			}
?>
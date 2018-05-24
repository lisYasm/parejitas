<?php
			$host = "localhost";
			$user = "id5886039_fullstack";
			$pw = "12345";
			$db= "id5886039_parejitas";

			/*$host = "localhost";
			$user = "root";
			$pw = "";
			$db= "bd_parejitas";*/

			
			$conexion = new mysqli($host, $user, $pw, $db);
			if ($conexion->connect_errno) {
				echo "Error";
				exit();
			}
?>


<?php
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="isaacs_admins";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>

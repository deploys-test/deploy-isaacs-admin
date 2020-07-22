<?php

	require_once "../../conexion.php";
	$conexion=conexion();
	$i=$_POST['Asig_Id'];
	$n=$_POST['Asig_Nombre'];


	$sql="INSERT into asignaturas (Asig_Id,Asig_Nombre) values ('$i','$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

<?php
	require_once "../../conexion.php";
	$conexion=conexion();
	$Asig_Id=$_POST['Asig_Id'];

	$sql="DELETE from asignaturas where Asig_Id='$Asig_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$NivelE_Id=$_POST['NivelE_Id'];

	$sql="DELETE from nivel_educacion where NivelE_Id='$NivelE_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
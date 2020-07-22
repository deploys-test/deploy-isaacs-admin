<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$i=$_POST['NivelE_Id'];
	$n=$_POST['NivelE_Nombre'];
	
	
	$sql="INSERT into nivel_educacion (NivelE_Id,NivelE_Nombre) values ('$i','$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
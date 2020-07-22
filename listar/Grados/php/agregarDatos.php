<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$G_Id=$_POST['G_Id'];
	
	
	
	$sql="INSERT into grados (G_Id) values ('$G_Id')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
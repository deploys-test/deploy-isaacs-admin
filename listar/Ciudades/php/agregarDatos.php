<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$i=$_POST['Ciud_Id'];
	$n=$_POST['Ciud_Nombre'];
	
	
	$sql="INSERT into ciudades (Ciud_Id,Ciud_Nombre) values ('$i','$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
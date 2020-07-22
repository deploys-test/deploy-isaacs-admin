<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$Est_Id=$_POST['Est_Id'];
	$NivelD_Id=$_POST['NivelD_Id'];
	$Cal_Id=$_POST['Cal_Id'];
	$Asig_Id=$_POST['Asig_Id'];
	$Cal_Promedio=$_POST['Cal_Promedio'];
	
	$sql="INSERT into calificaciones (Est_Id,NivelD_Id,Cal_Id,Asig_Id,Cal_Promedio) values ('$Est_Id','$NivelD_Id','$Cal_Id', '$Asig_Id', '$Cal_Promedio')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
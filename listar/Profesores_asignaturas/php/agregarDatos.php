<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$PA_Id=$_POST['PA_Id'];
	$P_Id=$_POST['P_Id'];
	$Asig_Id=$_POST['Asig_Id'];
	$G_Id=$_POST['G_Id'];
	$PA_AnoLectivo=$_POST['PA_AnoLectivo'];
	
	$sql="INSERT into prof_asig (PA_Id,P_Id,Asig_Id,G_Id,PA_AnoLectivo) values ('$PA_Id','$P_Id','$Asig_Id', '$G_Id', '$PA_AnoLectivo')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
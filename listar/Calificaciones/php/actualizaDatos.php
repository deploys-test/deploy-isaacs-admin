<?php
	require_once "../../conexion.php";
	$conexion=conexion();
  $Est_Id=$_POST['Est_Id'];
	$NivelD_Id=$_POST['NivelD_Id'];
	$Cal_Id=$_POST['Cal_Id'];
	$Asig_Id=$_POST['Asig_Id'];
	$Cal_Promedio=$_POST['Cal_Promedio'];

	$sql="UPDATE calificaciones set NivelD_Id='$NivelD_Id',Cal_Id='$Cal_Id',Asig_Id='$Asig_Id',Cal_Promedio='$Cal_Promedio' where Est_Id='$Est_Id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

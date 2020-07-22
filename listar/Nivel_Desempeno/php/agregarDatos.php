<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$NivelD_Id=$_POST['NivelD_Id'];
	$NivelD_Concepto=$_POST['NivelD_Concepto'];
	$NivelD_RangoMin=$_POST['NivelD_RangoMin'];
	$NivelD_RangoMax=$_POST['NivelD_RangoMax'];
	
	$sql="INSERT into nivel_desempeno (NivelD_Id,NivelD_Concepto,NivelD_RangoMin,NivelD_RangoMax) values ('$NivelD_Id','$NivelD_Concepto','$NivelD_RangoMin', '$NivelD_RangoMax')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
    $NivelD_Id=$_POST['NivelD_Id'];
	$NivelD_Concepto=$_POST['NivelD_Concepto'];
	$NivelD_RangoMin=$_POST['NivelD_RangoMin'];
	$NivelD_RangoMax=$_POST['NivelD_RangoMax'];


	$sql="UPDATE nivel_desempeno set NivelD_Concepto='$NivelD_Concepto',NivelD_RangoMin='$NivelD_RangoMin',NivelD_RangoMax='$NivelD_RangoMax' where NivelD_Id='$NivelD_Id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
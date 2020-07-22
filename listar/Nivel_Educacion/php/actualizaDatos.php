<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
    $i=$_POST['NivelE_Id'];
	$n=$_POST['NivelE_Nombre'];


	$sql="UPDATE nivel_educacion set NivelE_Nombre='$n'
							    
							

				where NivelE_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
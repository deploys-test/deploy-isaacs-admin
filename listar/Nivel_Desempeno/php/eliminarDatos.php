
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$NivelD_Id=$_POST['NivelD_Id'];

	$sql="DELETE from nivel_desempeno where NivelD_Id='$NivelD_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
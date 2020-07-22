
<?php
	require_once "../../conexion.php";
	$conexion=conexion();
	$Est_Id=$_POST['Est_Id'];

	$sql="DELETE from estudiantes where Est_Id='$Est_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

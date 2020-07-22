
<?php
	require_once "../../conexion.php";
	$conexion=conexion();
	$Ih_Id=$_POST['Ih_Id'];

	$sql="DELETE from asignaturas where Ih_Id='$Ih_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

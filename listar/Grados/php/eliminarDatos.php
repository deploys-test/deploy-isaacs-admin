
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$G_Id=$_POST['G_Id'];

	$sql="DELETE from grados where G_Id='$G_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
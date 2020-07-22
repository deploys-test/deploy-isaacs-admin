
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$P_Id=$_POST['P_Id'];

	$sql="DELETE from profesores where P_Id='$P_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
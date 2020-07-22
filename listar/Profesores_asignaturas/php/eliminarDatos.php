
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$PA_Id=$_POST['PA_Id'];

	$sql="DELETE from prof_asig where PA_Id='$PA_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
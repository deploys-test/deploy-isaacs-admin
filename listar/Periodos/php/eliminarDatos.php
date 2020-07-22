
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$Per_Id=$_POST['Per_Id'];

	$sql="DELETE from periodos where Per_Id='$Per_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
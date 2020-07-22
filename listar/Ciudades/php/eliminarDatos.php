
<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$Ciud_Id=$_POST['Ciud_Id'];

	$sql="DELETE from ciudades where Ciud_Id='$Ciud_Id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
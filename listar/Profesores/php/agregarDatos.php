<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$i=$_POST['P_Id'];
	$n=$_POST['P_Nombre'];
	$a=$_POST['P_Apellidos'];
	$e=$_POST['P_Email'];
	$t=$_POST['P_Telefono'];
	$c=$_POST['Ciud_Id'];
	$v=$_POST['NivelE_Id'];

	$sql="INSERT into profesores (P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Id,NivelE_Id) values ('$i','$n','$a','$e','$t','$c','$v')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
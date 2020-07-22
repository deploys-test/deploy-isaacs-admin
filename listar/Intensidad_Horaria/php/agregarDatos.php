<?php

	require_once "../../conexion.php";
	$conexion=conexion();
	$i=$_POST['Ih_Id'];
	$n=$_POST['Ih_Horas'];
	$a=$_POST['G_Id'];
	$e=$_POST['Asig_Id'];

	$sql="INSERT into asignaturas (Ih_Id,Ih_Horas,G_Id,Asig_Id) values ('$i','$n','$a','$e')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

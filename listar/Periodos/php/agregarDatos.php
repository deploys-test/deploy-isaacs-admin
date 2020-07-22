<?php 

	require_once "../../conexion.php";
	$conexion=conexion();
	$i=$_POST['Per_Id'];
	$n=$_POST['Per_FechaInicial'];
	$a=$_POST['Per_FechaFinal'];
	//$n = date("Y-m-d");
	//$a = date("Y-m-d");

	$sql="INSERT into periodos (Per_Id,Per_FechaInicial,Per_FechaFinal) values ('$i','$n','$a')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
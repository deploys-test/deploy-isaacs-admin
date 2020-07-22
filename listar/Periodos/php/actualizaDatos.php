<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
    $i=$_POST['Per_Id'];
	$n=$_POST['Per_FechaInicial'];
	$a=$_POST['Per_FechaFinal'];

	$sql="UPDATE periodos set Per_FechaInicial='$n',
							    Per_FechaFinal='$a'
							

				where Per_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
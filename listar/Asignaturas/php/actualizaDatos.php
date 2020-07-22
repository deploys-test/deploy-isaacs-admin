<?php
	require_once "../../conexion.php";
	$conexion=conexion();
    $i=$_POST['Asig_Id'];
		$n=$_POST['Asig_Nombre'];


	$sql="UPDATE asignaturas set Asig_Nombre='$n'	where Asig_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

<?php
	require_once "../../conexion.php";
	$conexion=conexion();
  $i=$_POST['Ih_Id'];
	$n=$_POST['Ih_Horas'];
	$a=$_POST['G_Id'];
	$e=$_POST['Asig_Id'];

	$sql="UPDATE asignaturas set Ih_Horas='$n',
							  G_Id='$a',
								Asig_Id='$e',

				where Ih_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

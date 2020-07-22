<?php
	require_once "../../conexion.php";
	$conexion=conexion();
  $i=$_POST['Est_Id'];
	$n=$_POST['Est_Nombre'];
	$a=$_POST['Est_Apellidos'];
	$e=$_POST['Est_Email'];
	$t=$_POST['Est_Telefono'];
	$f=$_POST['Est_FechaNac'];
	$g=$_POST['G_Id'];
	$c=$_POST['Ciud_Id'];
	$v=$_POST['NivelE_Id'];

	$sql="UPDATE estudiantes set Est_Nombre='$n',
							    Est_Apellidos='$a',
								Est_Email='$e',
								Est_Telefono='$t',
								Est_FechaNac='$f',
								G_Id='$g',
								Ciud_Id='$c',
								NivelE_Id='$v'

				where Est_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

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

	$sql="INSERT into estudiantes (Est_Id,Est_Nombre,Est_Apellidos,Est_Email,Est_Telefono,Est_FechaNac,G_Id,Ciud_Id,NivelE_Id) values ($i,'$n','$a','$e',$t,'$f','$g',$c,$v)";
	echo $result=mysqli_query($conexion,$sql);

 ?>

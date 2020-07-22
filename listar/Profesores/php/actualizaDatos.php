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

	$sql="UPDATE profesores set P_Nombre='$n',
							    P_Apellidos='$a',
								P_Email='$e',
								P_Telefono='$t',
								Ciud_Id='$c',
								NivelE_Id='$v'

				where P_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
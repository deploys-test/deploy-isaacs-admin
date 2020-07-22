<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
    $i=$_POST['Ciud_Id'];
	$n=$_POST['Ciud_Nombre'];


	$sql="UPDATE ciudades set Ciud_Nombre='$n'
							    
							

				where Ciud_Id='$i'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
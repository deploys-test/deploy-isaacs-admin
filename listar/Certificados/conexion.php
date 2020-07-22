<?php
global $host,$user,$pass,$database;

$host="localhost";
$user="root";
$pass="";
$database="Isaacs_Admins";


@$link=mysqli_connect($host,$user,$pass) or die ("conexion fallida");
mysqli_select_db($link, $database) or die ("error al conectarse con la base de datos".mysqli_error($link));
echo "<script languaje='javascript'>alert('conexion establecida')</script>";
?>

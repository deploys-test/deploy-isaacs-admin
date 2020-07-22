<?php
    global $host,$usser,$pass,$database;
    $host="localhost";
    $usser="root";
    $pass="root";
    $database="Isaacs_Admins";
    @$link=mysqli_connect($host,$usser,$pass) or die("Conexion fallida") ;
    mysqli_select_db($link,$database)or die("Error al conectarse con la base de datos". mysqli_error($link));
    // echo " <script languaje='javascript'>alert('Conexion establecida')</script>";
?>

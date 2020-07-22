<?php
require_once 'login.class.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();

if(isset($_POST['nick']))
{
	$nick = $_POST['nick'];
	$password = $_POST['password'];
	//accedemos al método usuarios y los mostramos
	$usuario = $nuevoSingleton->login_users($nick,$password);

	if($usuario == TRUE)
	{
		header("Location: Menu.php");
	}
		else {		
      header("Location:Index.html");
			echo "<script languaje='javascript'>alert('Porfavor Ingrese su usuario y contraseña')</script>";
		}
}
?>

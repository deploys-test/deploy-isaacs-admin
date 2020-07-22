<?php session_start() ?>
<?php if(isset($_SESSION['Usuario']))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Isaacs Admins</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="./img/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
	<style type="text/css">
			.titulo{
				color: #000000;
				font-family: 'Mukta Mahee', sans-serif;
			}
			.dashboard-sideBar{
				background-image: url(img/Fondo_Proyecto);
			}
			.imagen{
			  background-color: rgb(0, 117, 255);
			}
			.imagen:hover{
			  background-color: #4f79ab;
			}
	</style>
</head>

<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Isaacs Admins <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="img\Administrador.png" alt="UserIcon">
					<figcaption class="text-center text-titles">Administrador</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!" style="visibility:hidden" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="Menu.php">
						<i class="zmdi zmdi-home"></i> Inicio
					</a>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-library"></i> Manuales<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="manuales/Manual_Usuarios.pdf" target="_blank"><i class="zmdi zmdi-n-1-square"></i></i> Manual del Usuario</a>
						</li>
						<li>
							<a href="manuales/Manual_Sistemas.pdf" target="_blank" ><i class="zmdi zmdi-n-2-square"></i> Manual del Sistema</a>
						</li>
						<li>
							<a href="manuales/Proyecto_PDF.pdf" target="_blank" ><i class="zmdi zmdi-n-3-square"></i> Proyecto en PDF</a>
						</li>
					</ul>

					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-check-circle-u"></i> Objetivos<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="Mision.html	" ><i class="zmdi zmdi-n-1-square"></i></i> Mision</a>
						</li>
						<li>
							<a href="Vision.html" ><i class="zmdi zmdi-n-2-square"></i> Vision</a>
						</li>
					</ul>
					<li>
						<a href="Contacto_1.php">
								<i class="zmdi zmdi-phone"></i> Contactos
						</a>
					</li>

					<li>
						<a href="cerrar.php">
							<i class="zmdi zmdi-power-setting"></i> Cerrar Sesion
						</a>
					</li>

				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>

		<!-- Content page -->
			<center>
			<h1 class="titulo"> Menu Principal </h1>
			</center>

		<!-- AQUI VA EL MENU -->

		<div class="full-box text-center" style="padding: 30px 10px;">
			<a href="Profesores.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Profesores
				</div>
				<div class="full-box tile-icon text-center">
					<i> <img width="300px" height="170px" class="imagen" src="img\profesor.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Estudiantes.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estudiantes
				</div>
				<div class="full-box tile-icon text-center">
					  <i> <img "100px" height="300px" class="imagen" src="img\estudiar.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Asignaturas.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Asignaturas
				</div>
				<div class="full-box tile-icon text-center">
					  <i> <img width="300px" height="170px" class="imagen" src="img/asignatura-caligrafia.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Calificaciones.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				  Calificaciones
				</div>
				<div class="full-box tile-icon text-center">
					  <i> <img  width="300px" height="170px" class="imagen" src="img\calificacion-de-educacion-c.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Certificados.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Certificados
				</div>
				<div class="full-box tile-icon text-center">
					   <i> <img width="300px" height="170px" class="imagen" src="img\certificados.svg" alt=""> </i>

				</div>
			</article>
			</a>
			<a href="Ciudades.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Ciudades
				</div>
				<div class="full-box tile-icon text-center">
				  <i> <img  width="300px" height="170px" class="imagen" src="img\edificios-en-silueta-panoramica-de-nueva-york.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Grados.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Grados
				</div>
				<div class="full-box tile-icon text-center">
					 <i> <img width="300px" height="170px" class="imagen" src="img\diploma.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Nivel_Desempeno.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Nivel Desempeño
				</div>
				<div class="full-box tile-icon text-center">
					<i> <img  width="300px" height="170px" class="imagen" src="img\datos-sobre-recursos-humanos-del-desempeno-laboral.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Nivel_Educacion.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Nivel Educacion
				</div>
				<div class="full-box tile-icon text-center">
					<i> <img  width="300px" height="170px" class="imagen" src="img\examen.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Periodos.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Periodos
				</div>
				<div class="full-box tile-icon text-center">
					<i> <img  width="300px" height="170px" class="imagen" src="img\periodico.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Profesores_Asignaturas.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Profesores-Asignaturas
				</div>
				<div class="full-box tile-icon text-center">
					<i> <img width="300px" height="170px" class="imagen" src="img\geometria.svg" alt=""> </i>
				</div>
			</article>
			</a>
			<a href="Intensidad_Horaria.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Intensidad Horaria
				</div>
				<div class="full-box tile-icon text-center">
				<i> <img width="300px" height="170px" class="imagen" src="img\calendario-con-un-reloj-herramientas-de-tiempo.svg" alt=""> </i>
				</div>
			</article>
			</a>
  </div>
			<!--====== Scripts -->
			<script src="./js/jquery-3.1.1.min.js"></script>
			<script src="./js/sweetalert2.min.js"></script>
			<script src="./js/bootstrap.min.js"></script>
			<script src="./js/material.min.js"></script>
			<script src="./js/ripples.min.js"></script>
			<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
			<script src="./js/main.js"></script>
			<script>
				$.material.init();
			</script>
</body>
</html>
<?php
}else{
	header("Location: Login.php");
}

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Isaacs Admins</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="css/estilos_iconos.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" href="css/main.css">
      <link rel="shortcut icon" href="./img/logo.png">
			<style type="text/css">
			* {
					border-color: black;
				}
				iframe{
					border-radius: 15px;
					border-color: transparent;
				}
				.dashboard-sideBar{
					background-image: url(img/Fondo_Proyecto);
				}
				.button{
					background: #000000;
					color: rgb(0, 0, 0);
					display: inline-block;
					font-size: 1.25em;
					margin: 0px;
					padding: 7px 0px;
					text-align: center;
					width: 100px;
					text-decoration: none;
					border-radius: 15px;
					border-color: rgb(0, 0, 0);
					width: auto;
					height: auto;
					background: transparent;
					font-family: 'Fjalla One', sans-serif;
				}
				.button:hover{
					background: #ffffff;
					color: rgb(255, 255, 255);
					display: inline-block;
					background: blue;
				}
				.Nombres{
					font-family: 'Lobster', cursive;
					text-align:  inherit;
					padding: 10px;
					height: auto;
					border-radius: 10px;
					color: rgb(0, 0, 0);
				}
				.Linea{
					border-width: 3px;
					border-color: rgb(0, 0, 0);
				}
				.container{
					background-color: #337ab7;
					width: 800px;
					height: 500px;
					padding: 5px;
					border-radius: 10px;
				}
				.Titulos{
					color: black;
					font-family: 'Fjalla One', sans-serif;
				}
				.contenedor{
					width: 1128px;
					height: 600px;
					padding: 35px;
					overflow: hidden;
					display: inherit;
					border-style: solid;
					border-radius: 10px;
				}
				.Paneles{
					padding: 3px;
					float: left;
					height: 300px;
					width: 350px;
					text-align: center;
				}
				.xPanel{
					text-align: justify;
					color: black;
				}
				.Paneles1{
					padding: 3px;
					float: left;
					height: 300px;
					width: 350px;
					text-align: center;
				}
				.xPanel1{
					text-align: justify;
					color: black;
				}
				.Paneles2{
					padding: 3px;
					float: left;
					height: 300px;
					width: 350px;
					text-align: center;
				}
				.xPanel2{
					text-align: justify;
					color: black;
				}
				.Paneles3{
					padding: 3px;
					float: left;
					height: 300px;
					width: 350px;
					text-align: center;
				}
				.xPanel3{
					text-align: justify;
					color: black;
				}
				.Paneles4{
					padding: 3px;
					float: right;
					height: 300px;
					width: 350px;
					text-align: center;
				}
				.xPanel4{
					text-align: justify;
					color: black;
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
							<a href="Mision.html" ><i class="zmdi zmdi-n-1-square"></i></i> Mision</a>
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
		<br>
    <br>
		<center>
		<div class="contenedor">
				 <div class="Paneles">
					 <div class="panel panel panel-primary">
					 <div class="panel-heading"> <strong> Lider </strong> </div>
					 <div class="panel-heading"> Ivan Jose Bernal Barrios </div>
						 <div class="panel-body">
						 <td>
							 <div class="xPanel">
							 <tr> <i class = "zmdi zmdi-phone"> </i ><strong> Telefono: </strong> 304 331 99 93 </tr> <br>
							 <tr> <i class = "zmdi zmdi-email"> </i> <strong> Email: </strong> ibernalbarrios@misena.edu.co </tr> <br>
							 <tr> <i class = "zmdi zmdi-home"> </i> <strong> Direccion: </strong> Carrera 49 N° 54D - 41 </tr> <br>
							 <tr> <i class = "zmdi zmdi-label-alt"> </i> <strong> Barrio: </strong>: Villa Severa </tr> <br>
						 	 </div>
						 </td>
						 </div>
					 </div>
				 </div>

				 <div class="Paneles1">
					 <div class="panel panel panel-primary">
					 <div class="panel-heading"> <strong> Programador </strong> </div>
					 <div class="panel-heading"> Sebastian David Urbina Jimenez </div>
						 <div class="panel-body">
						 <td>
							 <div class="xPanel1">
							 <tr> <i class = "zmdi zmdi-phone"> </i ><strong> Telefono: </strong> 301 701 23 74 </tr> <br>
							 <tr> <i class = "zmdi zmdi-email"> </i> <strong> Email: </strong> surbinajimenez@misena.edu.co </tr> <br>
							 <tr> <i class = "zmdi zmdi-home"> </i> <strong> Direccion: </strong> Carrera 1D N° 18H - 17 </tr> <br>
							 <tr> <i class = "zmdi zmdi-label-alt"> </i> <strong> Barrio: </strong>: Simon Bolivar </tr> <br>
							 </div>
						 </td>
						 </div>
					 </div>
				 </div>

				 <div class="Paneles2">
					 <div class="panel panel panel-primary">
					 <div class="panel-heading"> <strong> Programador </strong> </div>
					 <div class="panel-heading"> Jean Carlos Cuentas Garcia </div>
						 <div class="panel-body">
						 <td>
							 <div class="xPanel2">
							 <tr> <i class = "zmdi zmdi-phone"> </i ><strong> Telefono: </strong> xxx xxx xx xx </tr> <br>
							 <tr> <i class = "zmdi zmdi-email"> </i> <strong> Email: </strong> jcuentasgarcia@misena.edu.co </tr> <br>
							 <tr> <i class = "zmdi zmdi-home"> </i> <strong> Direccion: </strong> Carrera xx N° xx - xx </tr> <br>
							 <tr> <i class = "zmdi zmdi-label-alt"> </i> <strong> Barrio: </strong>: Los cedros </tr> <br>
							 </div>
						 </td>
						 </div>
					 </div>
				 </div>

				 <center>
				 <div class="Paneles3">
					 <div class="panel panel panel-primary">
					 <div class="panel-heading"> <strong> Programador </strong> </div>
					 <div class="panel-heading"> Camilo Andres Montalvo Barrios </div>
						 <div class="panel-body">
						 <td>
							 <div class="xPanel3">
							 <tr> <i class = "zmdi zmdi-phone"> </i ><strong> Telefono: </strong> xxx xxx xx xx </tr> <br>
							 <tr> <i class = "zmdi zmdi-email"> </i> <strong> Email: </strong> cmontalvobarrios@misena.edu.co </tr> <br>
							 <tr> <i class = "zmdi zmdi-home"> </i> <strong> Direccion: </strong> Carrera xx N° xx - xx </tr> <br>
							 <tr> <i class = "zmdi zmdi-label-alt"> </i> <strong> Barrio: </strong>: Villa del Carmen </tr> <br>
							 </div>
						 </td>
						 </div>
					 </div>
				 </div>

				 <div class="Paneles4">
					 <div class="panel panel panel-primary">
					 <div class="panel-heading"> <strong> Programador </strong> </div>
					 <div class="panel-heading"> Rafael David Martelo Visbal </div>
						 <div class="panel-body">
						 <td>
							 <div class="xPanel4">
							 <tr> <i class = "zmdi zmdi-phone"> </i ><strong> Telefono: </strong> 302 257 73 83 </tr> <br>
							 <tr> <i class = "zmdi zmdi-email"> </i> <strong> Email: </strong> rdmartelo@misena.edu.co </tr> <br>
							 <tr> <i class = "zmdi zmdi-home"> </i> <strong> Direccion: </strong> Calle 48 N° 2D3 - 83 / Piso 3 </tr> <br>
							 <tr> <i class = "zmdi zmdi-label-alt"> </i> <strong> Barrio: </strong>: San Vicente </tr> <br>
							 </div>
						 </td>
						 </div>
					 </div>
				 </div>
				 </center>

		</div>
		</center>

	</section>
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

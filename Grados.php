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
      <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
      <style type="text/css">
      * {
					border-color: black;
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
        }
				.button:hover{
					background: #ffffff;
					color: rgb(255, 255, 255);
					display: inline-block;
					background: blue;
				}
        .Nombres{
          font-family: 'Mukta Mahee', sans-serif;
          text-align:  inherit;
          padding: 10px;
					height: auto;
          border-radius: 10px;
					color: rgb(0, 0, 0);
        }
        .xGrados{
          background-color: rgb(23, 218, 212);
          width: 800px;
          height: auto;
          padding: 30px;
          border-radius: 15px;
				}
				.Linea{
          border-width: 3px;
          border-color: rgb(0, 0, 0);
        }
				.container{
					background-color: #337ab7;
					width: 1040px;
					height: 500px;
					padding: 5px;
					border-radius: 10px;
				}
      </style>
      <?php
      include('conexion.php');
      $codigo="";

    // Guardar
         if(isset($_REQUEST['Guardar'])){
          $codigo=$_REQUEST['Codigo'];
           if(!empty($_REQUEST['Codigo'])){
            $guardar="insert into grados(G_Id  )values('$codigo') ";
            mysqli_query($link,$guardar) or die ("<script lenguaje='javascript'> alert ('El  dato ya existe') </script>");
            echo "<script lenguaje='javascript'> alert ('Datos guardados satisfactoriamente') </script>";
            $codigo="";
          }
          else{
           echo "<script lenguaje='javascript'> alert ('llene sus Datos') </script>";
          }
        }

            // Consultar
            //  if(isset ($_REQUEST['Consultar'])){
            //    $codigo=$_REQUEST['G_Id'];
            //    if (!empty($_REQUEST['Codigo'])){
            //      $CONSULTAR="select * from grados where G_Id=$codigo";
            //      $frespuesta=mysqli_query($link,$CONSULTAR);
            //      $frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
            //      if (empty($frow)){
            //        echo "<script languaje='javascript'>alert('El estudiante no existe')</script>";
            //      }
            //      else {
            //        $codigo=$frow['G_Id'];
            //      }
            //    }
            //  }

            // Actualizar
            //  if (isset($_REQUEST['Actualizar'])){
            //    $codigo=$_REQUEST['Codigo'];
            //    if (!empty($codigo)){
            //      if (!empty($codigo)){
            //        $actualizar="update grados set G_Id='$nivel'where G_Id=$codigo";
            //        $respuesta= mysqli_query($link,$actualizar);
            //        $codigo="";
            //        if ($respuesta) {
            //          echo "<script lenguaje='javascript'> alert ('Datos actualizados correctamente')</script>";
            //        }
            //      }
            //    }
            //  }

  //eliminar
      if (isset ($_REQUEST['Eliminar'])) {
        $codigo= $_REQUEST['Codigo'];
          if(!empty($codigo)){
          $eliminar="delete from grados where G_Id=$codigo";
          mysqli_query($link,$eliminar);
          echo "<script lenguaje='javascript'>alert('Datos eliminados correctamente') </script>";
          $codigo="";
          }
        }

  //limpiar
        if (isset($_REQUEST['Limpiar'])) {
        $codigo="";
        }
      ?>
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
				  <br>
					<br>
					<!--
          <div class="xGrados" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Grados </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr><td><font size="4" class="Titulos">Codigo:<td><input type="text" maxlength="3" class="Nombres" size="20" value="<?php echo $codigo; ?> " Name="Codigo" size="3"><br></tr></td>
             </table>
                <hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <input class="button" class ="btn btn-primary" type="submit" name="Guardar" value=" Guardar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Eliminar" value=" Eliminar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Limpiar" value=" Limpiar " >
              </p>
           </form>
        </div>
				-->
				<br>
				<!-- Aqui va el listar -->
				<iframe class="container" src="listar\Grados\index.php" width="1000px" height="500"></iframe>
				<br>
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

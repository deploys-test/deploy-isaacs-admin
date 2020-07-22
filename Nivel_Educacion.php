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
        .xNivelEducacion{
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
					background-color: rgb(23, 218, 212);
					width: 1000px;
					height: 450;
					padding: 10px;
					border-radius: 10px;
				}
				.container{
					background-color: #337ab7;
					width: 1000px;
					height: 500px;
					padding: 5px;
					border-radius: 10px;
				}
      </style>
 <?php
          include('conexion.php');
          $NivelE_Id="";
          $NivelE_Nombre="";
          //Guardar
          if (isset($_REQUEST['Guardar']))
          {
            $NivelE_Id=$_REQUEST['Codigo_N'];
            $NivelE_Nombre=$_REQUEST['Nombre'];
            if (!empty($_REQUEST['Codigo_N']) && !empty($_REQUEST['Nombre']))
            {
            $Guardar="insert into nivel_educacion(NivelE_Id, NivelE_Nombre)values($NivelE_Id, '$NivelE_Nombre')";
            mysqli_query($link,$Guardar) or die("<script languaje='javascript'>alert('El codigo ya esta registrado, Intente otro')</script>");
            echo "<script languaje='javascript'>alert('Datos guardados correctamente')</script>";
            $NivelE_Id="";
            $NivelE_Nombre="";

          }else {
            echo "<script languaje='javascript'>alert('Porfavor llene los campos')</script>";
            }
          }
          //CONSULTAR
          if (isset($_REQUEST['Consultar'])) {
              $NivelE_Id=$_REQUEST['Codigo_N'];
            if (!empty($_REQUEST['Codigo_N'])) {
              $Consultar="Select * from nivel_educacion where NivelE_Id=$NivelE_Id";
              $respuesta=mysqli_query($link,$Consultar);
              $frow=mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
              if (empty($frow)) {
                echo"<script languaje='javascript'>alert('El Codigo no tiene ningun registro')</script>";
              }
              else{
                $NivelE_Id=$frow['NivelE_Id'];
                $NivelE_Nombre=$frow['NivelE_Nombre'];
              }
            }
            else {
              echo"<script languaje='javascript'>alert('Ingrese el codigo')</script>";
            }
          }
          //Actualizar
          if(isset($_REQUEST['Actualizar'])){
            $NivelE_Id=$_REQUEST['Codigo_N'];
            $NivelE_Nombre=$_REQUEST['Nombre'];
            if(!empty($NivelE_Id)){
              if(!empty($NivelE_Nombre)){
                $Actualizar="Update nivel_educacion set NivelE_Nombre='$NivelE_Nombre' where NivelE_Id=$NivelE_Id";
                $Respuesta1=mysqli_query($link,$Actualizar);
                $NivelE_Id="";
                $NivelE_Nombre="";
                if($Respuesta1){
                echo "<script languaje='javascript'>alert('Datos Actualizados correctamente')</script>";
                }
              }
            }
          else {
            echo"<script languaje='javascript'>alert('Porfavor llene el campo a actualizar')</script>";
           }
          }
          //Eliiminar
           if(isset($_REQUEST['Eliminar'])){
            $NivelE_Id=$_REQUEST['Codigo_N'];
            if(!empty($NivelE_Id)){
              $Eliminar="Delete from nivel_educacion Where NivelE_Id=$NivelE_Id";
              mysqli_query($link,$Eliminar);
              echo "<script languaje='javascript'>alert('Datos eliminados correctamente')</script>";
              $NivelE_Id="";
            }
            else {
              echo"<script languaje='javascript'>alert('Ingrese el codigo a eliminar')</script>";
            }
           }
           //Limpiar
           if(isset($_REQUEST['Limpiar'])){
             $NivelE_Id="";
             $NivelE_Nombre="";
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
				 <!--
          <div class="xNivelEducacion" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Nivel de Educacion </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr> <td> <font size="4" class="Titulos">Codigo:<td><input type="text" maxlength="2" class="Nombres" name="Codigo_N" value="<?php echo $NivelE_Id; ?>"> <br></tr>
                <tr> <td> <font size="4" class="Titulos">Nombre:<td><input type="text" maxlength="25" class="Nombres" name="Nombre" value="<?php echo $NivelE_Nombre; ?>"> <br></tr>
             </table>
                <hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <input class="button" class ="btn btn-primary" type="submit" name="Guardar" value=" Guardar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Consultar" value=" Consultar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Actualizar" value=" Actualizar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Eliminar" value=" Eliminar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Limpiar" value=" Limpiar " >
              </p>
          </form>
        </div>
				-->
				<br>
				<!-- Aqui va el listar -->
				<iframe class="container" src="listar\Nivel_Educacion\index.php" width="1000px" height="500"></iframe>
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

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
        .xPeriodos{
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
       include('Conexion.php');
       $Codigo="";
       $Fecha1="";
       $Fecha2="";
     //Guardar
     if (isset($_REQUEST['Guardar'])){
       $Codigo=$_REQUEST['Codigo'];
       $Fecha1=$_REQUEST['FechaInicial'];
       $Fecha2=$_REQUEST['FechaFinal'];
       if (!empty($_REQUEST['Codigo']) && !empty($_REQUEST['FechaInicial']) && !empty($_REQUEST['FechaInicial'])){
       $Guardar="insert into periodos(Per_Id, Per_FechaInicial,Per_FechaFinal)values('$Codigo', '$Fecha1','$Fecha2')";
       mysqli_query($link,$Guardar) or die("<script languaje='javascript'>alert('El Codigo ya Existe')</script>");
       echo "<script languaje='javascript'>alert('Datos Guardados Correctamente')</script>";
       $Codigo="";
       $Fecha1="";
       $Fecha2="";
     }
     else {
       echo "<script languaje='javascript'>alert('Por favor llene Los Datos .')</script>";
      }
    }

     //CONSULTAR
     if (isset($_REQUEST['Consultar'])) {
         $Codigo=$_REQUEST['Codigo'];
       if (!empty($_REQUEST['Codigo'])) {
         $Consultar="Select * from periodos where Per_Id=$Codigo";
         $respuesta=mysqli_query($link,$Consultar);
         $frow=mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
         if (empty($frow)) {
           echo"<script languaje='javascript'>alert('El Codigo del periodo no existe')</script>";
         }
         else{
           $Codigo=$frow['Per_Id'];
           $Fecha1=$frow['Per_FechaInicial'];
           $Fecha2=$frow['Per_FechaFinal'];
         }
       }
       else {
         echo"<script languaje='javascript'>alert('Ingrese el codigo del periodo')</script>";
       }
     }

     //Actualizar
     if(isset($_REQUEST['Actualizar'])){
       $Codigo=$_REQUEST['Codigo'];
       $Fecha1=$_REQUEST['FechaInicial'];
       $Fecha2=$_REQUEST['FechaFinal'];
       if(!empty($Codigo)){
         if(!empty($Fecha1)){
           $Actualizar="Update periodos set Per_FechaInicial='$Fecha1', Per_FechaFinal='$Fecha2' where Per_Id=$Codigo";
           $Respuesta1=mysqli_query($link,$Actualizar);
           $codigo="";
           $Fecha1="";
           $Fecha2="";
           if($Respuesta1){
           echo "<script languaje='javascript'>alert('Datos Actualizados Correctamente')</script>";
          }
        }
      }
    }
       //Eliiminar
        if(isset($_REQUEST['Eliminar'])){
         $Codigo=$_REQUEST['Codigo'];
         if(!empty($Codigo)){
           $Eliminar="Delete from periodos Where Per_Id=$Codigo";
           mysqli_query($link,$Eliminar);
           echo "<script languaje='javascript'>alert('Datos Eliminados Correctamente')</script>";
           $Codigo="";
         }
      }
      //Limpiar
      if(isset($_REQUEST['Limpiar'])){
        $Codigo="";
        $Fecha1="";
        $Fecha2="";
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
          <div class="xPeriodos" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Periodos </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr> <td><font size="4" class="Titulos">Codigo:<td><input type="text" name="Codigo" maxlength="1" class="Nombres" size="20" value="<?php echo $Codigo; ?>"> <br></tr>
                <tr> <td><font size="4" class="Titulos">Fecha Inicial:<td><input type="date" maxlength="10" name="FechaInicial" class="Nombres" size="20" value="<?php echo $Fecha1; ?>"> <br></tr>
                <tr> <td><font size="4" class="Titulos">Fecha Final:<td><input type="date"  maxlength="10" name="FechaFinal" class="Nombres" size="20" value="<?php echo $Fecha2; ?>"> <br></tr>
             </table>
                <hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <input class="button" class ="btn btn-primary" type="submit" name="Guardar" value=" Guardar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Consultar" value=" Consultar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Actualizar" value=" Actualizar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Eliminar" value=" Eliminar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Limpiar" value=" Limpiar " >
								<button class="button" type="button" id="boton" onclick="Mostrar_Ocultar()" >Listar</button>
              </p>
          </form>
        </div>
				-->
				 <br>
				 <!-- Aqui va el listar -->

						<script type="text/javascript">
														 function Mostrar() {
															document.getElementById("caja").style.display ="none";
														}
														 function Ocultar() {
														 document.getElementById("caja").style.display ="block";
														}
														 function Mostrar_Ocultar(){
														 var caja = document.getElementById("caja");
															if (caja.style.display == "block"){
																Mostrar(); document.getElementById("boton").value = "Listar";
																//caja.style.display ="none";
														}else{
															 Ocultar(); document.getElementById("boton").value = "Ocultar";
														 }
													}
													 </script>
							 				<!-- <section  id="caja"  style="display:none"> -->
											 <iframe class="container" src="listar\Periodos\index.php" width="1000px" height="500"></iframe>
										<!--	 </section> -->
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

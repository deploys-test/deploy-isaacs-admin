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
			<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
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
				.xCalificaciones{
					background-color: rgb(0, 117, 255);
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
				.Titulos{
					color: black;
					font-family: 'Fjalla One', sans-serif;
				}
			</style>
  <?php
      include('conexion.php');
      $Est_Id="";
      $NivelE_Id="";
      $Cal_Id="";
      $Asig_Id="";
      $Promedio="";
			$Asigs_Id="";
			$Asigs_Nombre="";
			$NE_Id="";
			$NE_Nombre="";

			// Consultar Nivel Educacion
			$Consultar_NivelE="SELECT * FROM Nivel_Educacion";
			$Datos_NivelE=mysqli_query($link,$Consultar_NivelE);

			// Consultar Asignaturas
			$Consultar_Asig="SELECT * FROM Asignaturas";
			$Datos_Asig=mysqli_query($link,$Consultar_Asig);

  //guardar
  if (isset($_REQUEST['Guardar'])) {
      $Cal_Id=$_REQUEST['Codigo_Calificacion'];
      $Est_Id=$_REQUEST['Codigo_Estudiante'];
      $Asig_Id=$_REQUEST['Codigo_Asignatura'];
      $Promedio=$_REQUEST['Promedio'];
    if(!empty($_REQUEST['Codigo_Estudiante']) && !empty($_REQUEST['Codigo_Educacion']) && !empty($_REQUEST['Codigo_Calificacion']) && !empty($_REQUEST['Codigo_Asignatura']) && !empty($_REQUEST['Promedio'])){
      $guardar="insert into calificaciones(Est_Id,  Cal_Id, Asig_Id, Cal_Promedio)values('$Est_Id',  '$Cal_Id', '$Asig_Id', '$Promedio')";
      mysqli_query($link,$guardar) or die ("<script lenguaje='javascript'> alert ('Los datos ya existen') </script>");
      echo "<script lenguaje='javascript'> alert ('Datos guardados correctamente') </script>";
			$Est_Id="";		
			$Cal_Id="";
			$Asig_Id="";
			$Promedio="";
			$Asigs_Id="";
			$Asigs_Nombre="";
			

    }
  else {
    echo "<script lenguaje='javascript'> alert ('Por favor llene los campos') </script>";
    }
  }
  //Consultar
  if(isset ($_REQUEST['Consultar'])){
      $Cal_Id=$_REQUEST['Codigo_Calificacion'];
    if (!empty($_REQUEST['Codigo_Calificacion'])){
        $CONSULTAR="select * from calificaciones c, Asignaturas a where  a.Asig_Id=c.Asig_Id and c.Cal_Id= $Cal_Id";
        $frespuesta=mysqli_query($link,$CONSULTAR);
        $frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
      if (empty($frow)){
        echo "<script languaje='javascript'>alert('El codigo de calificacion no existe')</script>";
      }
      else {
        $Est_Id=$frow['Est_Id'];
   
        $Cal_Id=$frow['Cal_Id'];
				$Asig_Id=$frow['Asig_Id'];
        $Promedio=$frow['Cal_Promedio'];
				$Asigs_Id=$frow['Asig_Id'];
				$Asigs_Nombre=$frow['Asig_Nombre'];
				
    	 }
	   }
		else {
			echo "<script lenguaje='javascript'> alert ('Porfavor ingrese el codigo') </script>";
		}
  }
  //actualizar
  if (isset($_REQUEST['Actualizar'])){
      $Est_Id=$_REQUEST['Codigo_Estudiante'];
      $NivelE_Id=$_REQUEST['Codigo_Educacion'];
      $Cal_Id=$_REQUEST['Codigo_Calificacion'];
      $Asig_Id=$_REQUEST['Codigo_Asignatura'];
      $Promedio=$_REQUEST['Promedio'];
    if (!empty($Est_Id)){
      if (!empty($NivelE_Id)){
        $actualizar="update calificaciones set NivelE_Id='$NivelE_Id', Est_Id='$Est_Id', Asig_Id='$Asig_Id', Cal_Promedio='$Promedio' where Cal_Id=$Cal_Id";
        $respuesta= mysqli_query($link,$actualizar);
				$Est_Id="";
	      $NivelE_Id="";
	      $Cal_Id="";
	      $Asig_Id="";
	      $Promedio="";
				$Asigs_Id="";
				$Asigs_Nombre="";
				$NE_Id="";
				$NE_Nombre="";
        if ($respuesta) {
          echo "<script lenguaje='javascript'> alert ('Datos actualizados correctamente')</script>";
        }
      }
    }
		else {
			echo "<script lenguaje='javascript'> alert ('Por favor llene los datos a actualizar') </script>";
		}
  }

  //eliminar
  if (isset ($_REQUEST['Eliminar'])) {
        $Cal_Id= $_REQUEST['Codigo_Calificacion'];
        if(!empty($Cal_Id)){
        $eliminar="delete from calificaciones where Cal_Id=$Cal_Id";
        mysqli_query($link,$eliminar);
        echo "<script lenguaje='javascript'>alert('Datos eliminados correctamente') </script>";
				$Est_Id="";
	      $NivelE_Id="";
	      $Cal_Id="";
	      $Asig_Id="";
	      $Promedio="";
				$Asigs_Id="";
				$Asigs_Nombre="";
				$NE_Id="";
				$NE_Nombre="";
        }
				else {
					echo "<script lenguaje='javascript'> alert ('Por favor llene el codigo de la calificacion a Eliminar') </script>";
				}
      }
  //limpiar
  if (isset($_REQUEST['Limpiar'])) {
				$Est_Id="";
				$NivelE_Id="";
				$Cal_Id="";
				$Asig_Id="";
				$Promedio="";
				$Asigs_Id="";
				$Asigs_Nombre="";
				$NE_Id="";
				$NE_Nombre="";
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
          <div class="xCalificaciones" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Calificaciones </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr><td> <font size="4" class="Titulos">N°Calificacion:<td> <input type="text" maxlength="10" class="Nombres"  onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" value="<?php echo $Cal_Id; ?>" Name="Codigo_Calificacion" size="20"><br></tr></td>
                <tr><td> <font size="4" class="Titulos">Identificacion Estudiante:<td> <input maxlength="13" type="text" class="Nombres" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" value="<?php echo $Est_Id; ?>" Name="Codigo_Estudiante" size="20"><br></tr></td>
               
				
                <tr><td> <font size="4" class="Titulos">Asignatura:<td>
							<?php if(empty($Asigs_Id) && empty($Asigs_Nombre)){?>
							<select name="Codigo_Asignatura" class="Nombres" value="<?php $Asigs_Id;  ?>">
							<?php while($Consultar_Asig=mysqli_fetch_array($Datos_Asig)){ ?>
										<option value="<?php echo $Consultar_Asig ['Asig_Id'];?>"> <?php echo $Consultar_Asig ['Asig_Nombre'];?> </option>
							<?php
							}
							?>
							</select>
							<?php }else{?>
							<select name="Codigo_Asignatura" class="Nombres" Value="<?php $Asigs_Id ?> ">
							<option value="<?php echo $Asigs_Id ?>"> <?php echo $Asigs_Nombre ?> </option>
							<?php $Consultar_Asig="SELECT * FROM asignaturas";
									$Datos_Asig=mysqli_query($link,$Consultar_Asig);
							?>

							<?php while($Consultar_Asig=mysqli_fetch_array($Datos_Asig)){ ?>
									<option value="<?php echo $Consultar_Asig ['Asig_Id'];?>"> <?php echo $Consultar_Asig ['Asig_Nombre'];?> </option>
							<?php
									}
							?>
									</select>
						<?php } ?>
								<br></tr>
                <tr><td> <font size="4" class="Titulos">Promedio:<td> <input type="text" maxlength="3" class="Nombres"  maxlength="3" value="<?php echo $Promedio; ?>" Name="Promedio" size="20"><br></tr></td>
             </table>
                <hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <input class="button" class ="btn btn-primary" type="submit" name="Guardar" value=" Guardar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Consultar" value=" Consultar " >
                <input class="button" class ="btn btn-primary" type="submit" name="Actualizar" value=" Actualizar " >
   <!--======   <input class="button" class ="btn btn-primary" type="submit" name="Eliminar" value=" Eliminar " > -->
                <input class="button" class ="btn btn-primary" type="submit" name="Limpiar" value=" Limpiar " >
								<button class="button" type="button" id="boton" onclick="Mostrar_Ocultar()" >Listar</button>
              </p>
          </form>
        </div>
          <br>
					<br>
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


						<section  id="caja"  style="display:none">
						<iframe class="container" src="listar\Calificaciones\index.php" width="1000px" height="500"></iframe>
						</section>
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

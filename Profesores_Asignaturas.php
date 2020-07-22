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
				.xProfAsig{
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
			$PA_Id="";
      $P_Id="";
      $Asig_Id="";
      $G_Id="";
      $PA_AñoLectivo="";
			$Prof_Id="";
			$Prof_Nombre="";
			$Prof_Apellidos="";
			$Asigs_Id="";
			$Asigs_Nombre="";
			$Grados="";

			// Consultar Profesores
			$Consultar_Prof="SELECT * FROM Profesores";
			$Datos_Prof=mysqli_query($link,$Consultar_Prof);

			// Consultar Asignaturas
			$Consultar_Asig="SELECT * FROM Asignaturas";
			$Datos_Asig=mysqli_query($link,$Consultar_Asig);

			// Consultar Grados
			$Consultar_Grados="SELECT * FROM Grados";
			$Datos_Grados=mysqli_query($link,$Consultar_Grados);

      //Guardar
      if (isset($_REQUEST['Guardar'])) {
				  $PA_Id=$_REQUEST['PA_Id'];
          $P_Id=$_REQUEST['P_Id'];
          $Asig_Id=$_REQUEST['Asig_Id'];
          $G_Id=$_REQUEST['G_Id'];
          $PA_AñoLectivo=$_REQUEST['PA_AñoLec'];
        if(!empty($_REQUEST['P_Id']) && !empty($_REQUEST['Asig_Id']) && !empty($_REQUEST['G_Id']) && !empty($_REQUEST['PA_AñoLec'])){
          $guardar="insert into prof_asig(PA_Id, P_Id, Asig_Id, G_Id, Pa_Anolectivo)values('$PA_Id','$P_Id', '$Asig_Id', '$G_Id', '$PA_AñoLectivo')";
          mysqli_query($link,$guardar) or die ("<script lenguaje='javascript'> alert ('Los datos ya existen') </script>");
          echo "<script lenguaje='javascript'> alert ('Datos guardados correctamente') </script>";
					$PA_Id="";
	        $P_Id="";
	        $Asig_Id="";
	        $G_Id="";
	        $PA_AñoLectivo="";
        }
      else {
        echo "<script lenguaje='javascript'> alert ('Por favor llene los datos') </script>";
        }
      }
			//CONSULTAR
	    if (isset($_REQUEST['Consultar'])) {
	        $PA_Id=$_REQUEST['PA_Id'];
	      if (!empty($_REQUEST['PA_Id'])) {
	        $Consultar="SELECT * FROM prof_asig pa, profesores p, asignaturas a, grados g WHERE g.G_Id=pa.G_Id and a.Asig_Id=pa.Asig_Id and p.P_Id=pa.P_Id and pa.PA_Id=$PA_Id";
	        $respuesta=mysqli_query($link,$Consultar);
	        $frow=mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
	        if (empty($frow)) {
	          echo"<script languaje='javascript'>alert('El codigo No Existe')</script>";
	        }
	        else{
	          $PA_Id=$frow['PA_Id'];
						$Prof_Id=$frow['P_Id'];
						$Prof_Nombre=$frow['P_Nombre'];
						$Prof_Apellidos=$frow['P_Apellidos'];
						$G_Id=$frow['G_Id'];
	          $PA_AñoLectivo=$frow['PA_AnoLectivo'];
						$Asigs_Id=$frow['Asig_Id'];
						$Asigs_Nombre=$frow['Asig_Nombre'];
						$Grados=$frow['G_Id'];
	        }
	      }
				else {
					echo "<script lenguaje='javascript'> alert ('Por favor ingrese el Codigo') </script>";
				}
	    }
			//Actualizar
			if (isset($_REQUEST['Actualizar'])){
				$PA_Id=$_REQUEST['PA_Id'];
        $P_Id=$_REQUEST['P_Id'];
        $Asig_Id=$_REQUEST['Asig_Id'];
        $G_Id=$_REQUEST['G_Id'];
        $PA_AñoLectivo=$_REQUEST['PA_AñoLec'];
				if(!empty($PA_Id)){
					if(!empty($P_Id)){
						if(!empty($Asig_Id)){
							if(!empty($G_Id)){
								if(!empty($PA_AñoLectivo)){
								$actualizar="update prof_asig set P_Id=$P_Id, Asig_Id='$Asig_Id', G_Id='$G_Id', PA_Anolectivo='$PA_AñoLectivo' where PA_Id=$PA_Id";
				        $respuesta= mysqli_query($link,$actualizar);
								$PA_Id="";
				        $P_Id="";
				        $Asig_Id="";
				        $G_Id="";
				        $PA_AñoLectivo="";
				 			  $Grados="";
				        if($respuesta){
				        echo "<script lenguaje='javascript'> alert ('Datos actualizados correctamente')</script>";
										}
									}
								}
							}
						}
					}
				else {
						echo "<script lenguaje='javascript'> alert ('Por favor llene los datos a actualizar') </script>";
				}
			}
      //Eliminar
      if (isset ($_REQUEST['Eliminar'])) {
        $PA_Id= $_REQUEST['PA_Id'];
        if(!empty($PA_Id)){
        $eliminar="delete from prof_asig where PA_Id=$PA_Id";
        mysqli_query($link,$eliminar);
        echo "<script lenguaje='javascript'>alert('Datos Eliminados Correctamente') </script>";
				$PA_Id="";
        $P_Id="";
        $Asig_Id="";
        $G_Id="";
        $PA_AñoLectivo="";
 			  $Grados="";
       }
			 else {
			 	  echo "<script lenguaje='javascript'>alert('Ingrese el codigo para eliminar') </script>";
			 }
      }
     //Limpiar
     if (isset ($_REQUEST['Limpiar'])) {
			 $PA_Id="";
       $P_Id="";
       $Asig_Id="";
       $G_Id="";
       $PA_AñoLectivo="";
			 $Grados="";
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
          <div class="xProfAsig" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Profesores - Asignaturas </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
								<tr><td><font size="4" class="Titulos">Codigo:<td><input Name="PA_Id" maxlength="3" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" type="text" class="Nombres" value="<?php echo $PA_Id; ?>"><br></tr></td>
                <tr><td><font size="4" class="Titulos">Profesor:<td>
							<?php if(empty($Prof_Id) && empty($Prof_Nombre) && empty($Prof_Apellidos)){?>
            	<select name="P_Id" class="Nombres" value="<?php $Prof_Id;  ?>">
             	<?php while($Consultar_P=mysqli_fetch_array($Datos_Prof))
							{
							?>
            		<option value="<?php echo $Consultar_P ['P_Id'];?>"> <?php echo $Consultar_P ['P_Nombre'];?> <?php echo $Consultar_P ['P_Apellidos'];?> </option>
              <?php
              }
              ?>
            	</select>
          		<?php }else{?>
            	<select name="P_Id" class="Nombres" Value="<?php $Prof_Id ?> ">
              <option value="<?php echo $Prof_Id ?>"> <?php echo $Prof_Nombre ?> <?php echo $Prof_Apellidos ?> </option>
              <?php $Consultar_Prof="SELECT *  FROM Profesores";
								 $Datos_Prof=mysqli_query($link,$Consultar_Prof);
              ?>

							<?php while($Consultar_P=mysqli_fetch_array($Datos_Prof))
							{
							?>
              	 <option value="<?php echo $Consultar_P ['P_Id'];?>"> <?php echo $Consultar_P ['P_Nombre'];?> <?php echo $Consultar_P ['P_Apellidos'];?> </option>
              <?php
              }
              ?>
            </select>
					  <?php } ?>
            <br></tr>

                <tr><td><font size="4" class="Titulos">Asignatura:<td>

										<?php if(empty($Asigs_Id) && empty($Asigs_Nombre)){?>
										<select name="Asig_Id" class="Nombres" value="<?php $Asigs_Id;  ?>">
										<?php while($Consultar_Asig=mysqli_fetch_array($Datos_Asig)){ ?>
													<option value="<?php echo $Consultar_Asig ['Asig_Id'];?>"> <?php echo $Consultar_Asig ['Asig_Nombre'];?> </option>
										<?php
										}
										?>
										</select>
										<?php }else{?>
										<select name="Asig_Id" class="Nombres" Value="<?php $Asigs_Id ?> ">
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
                <tr><td><font size="4" class="Titulos">Grado:<td>

										<?php if(empty($Grados)){?>
			            	<select name="G_Id" class="Nombres" value="<?php $Grados;?>">
											<?php while($Consultar_G=mysqli_fetch_array($Datos_Grados))
											{
											?>
				            		<option value="<?php echo $Consultar_G ['G_Id'];?>"> <?php echo $Consultar_G ['G_Id'];?> </option>
				              <?php
				              }
				              ?>
				            	</select>
				          		<?php }else{?>
			            	<select name="G_Id" class="Nombres" Value="<?php $Grados ?> ">
											<option value="<?php echo $Grados ?>"> <?php echo $Grados ?> </option>
				              <?php $Consultar_Grados="SELECT *  FROM Grados";
												 $Datos_Grados=mysqli_query($link,$Consultar_Grados);
				              ?>

											<?php while($Consultar_G=mysqli_fetch_array($Datos_Grados))
											{
											?>
				              	 <option value="<?php echo $Consultar_G ['G_Id'];?>"> <?php echo $Consultar_G ['G_Id'];?> </option>
				              <?php
				              }
				              ?>
				            </select>
									  <?php } ?>
				            <br></tr>
                <tr><td><font size="4" class="Titulos">Año Lectivo:<td><input Name="PA_AñoLec" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" maxlength="4" type="text" class="Nombres" value="<?php echo $PA_AñoLectivo; ?>"><br></tr></td>
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
						<iframe class="container" src="listar\Profesores_asignaturas\index.php" width="1000px" height="500"></iframe>
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

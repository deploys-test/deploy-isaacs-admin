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
				.xIntensidadHoraria{
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
              $Ih_Id="";
              $Ih_Horas="";
              $G_Id="";
              $Asig_Id="";
							$Grados="";
							$Asigs_Id="";
							$Asigs_Nombre="";

							// Consultar Grados
							$Consultar_Grados="SELECT * FROM Grados";
							$Datos_Grados=mysqli_query($link,$Consultar_Grados);

							// Consultar Asignaturas
							$Consultar_Asig="SELECT * FROM Asignaturas";
							$Datos_Asig=mysqli_query($link,$Consultar_Asig);

          //GUARDAR
          if (isset($_REQUEST['Guardar']))
          {
                $Ih_Id=$_REQUEST['Codigo'];
                $Ih_Horas=$_REQUEST['Horas'];
                $G_Id=$_REQUEST['Grados'];
                $Asig_Id=$_REQUEST['Codigo_Asig'];
            if (!empty($_REQUEST['Codigo']) && !empty($_REQUEST['Horas']) && !empty($_REQUEST['Grados']) && !empty($_REQUEST['Codigo_Asig'])){
								$Guardar="INSERT INTO Intensidad_horarias(Ih_Id, Ih_Horas, G_Id, Asig_Id) values ('$Ih_Id', '$Ih_Horas', '$G_Id', '$Asig_Id')";
								mysqli_query($link,$Guardar) or die("<script languaje='javascript'>alert('El Codigo ya Existe.')</script>");
                echo "<script languaje='javascript'>alert('Datos guardados Exitosamente.')</script>";
                $Ih_Id="";
                $Ih_Horas="";
                $G_Id="";
                $Asig_Id="";
            }else {
                echo "<script languaje='javascript'>alert('Por favor llene Los campos.')</script>";
            }
          }
          //Consultar
          if(isset ($_REQUEST['Consultar'])){
              $Ih_Id=$_REQUEST['Codigo'];
            if (!empty($_REQUEST['Codigo'])){
                $CONSULTAR="select * from intensidad_Horarias ih, grados g, asignaturas a where a.Asig_Id=ih.Asig_Id and g.G_Id=ih.G_Id and Ih_Id=$Ih_Id";
                $frespuesta=mysqli_query($link,$CONSULTAR);
                $frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
              if (empty($frow)){
                echo "<script languaje='javascript'>alert('El Codigo de intensidad horaria no existe')</script>";
              }
              else {
                $Ih_Id=$frow['Ih_Id'];
                $Ih_Horas=$frow['Ih_Horas'];
								$Grados=$frow['G_Id'];
							  $Asig_Id=$frow['Asig_Id'];
								$Asigs_Id=$frow['Asig_Id'];
								$Asigs_Nombre=$frow['Asig_Nombre'];
              }
            }
        		else {
        			echo "<script lenguaje='javascript'> alert ('Porfavor ingrese el Codigo') </script>";
        		}
          }
					//ACTUALIZAR
				      if(isset($_REQUEST['Actualizar'])){
				        $Ih_Id=$_REQUEST['Codigo'];
				        $Ih_Horas=$_REQUEST['Horas'];
								$G_Id=$_REQUEST['Grados'];
								$Asig_Id=$_REQUEST['Codigo_Asig'];
				        if(!empty($Ih_Id)){
				          if(!empty($Ih_Horas)){
										if(!empty($G_Id)){
											if(!empty($Asig_Id)){
				            $Actualizar="Update intensidad_horarias set Ih_Horas='$Ih_Horas', G_Id='$G_Id', Asig_Id='$Asig_Id' where Ih_Id=$Ih_Id";
				            $Respuesta1=mysqli_query($link,$Actualizar);
										$Ih_Id="";
										$Ih_Horas="";
										$G_Id="";
										$Asig_Id="";
				            if($Respuesta1){
				            echo "<script languaje='javascript'>alert('Datos actualizados correctamente')</script>";
						            }
						          }
						        }
									}
								}
				        else {
				          echo "<script languaje='javascript'>alert('Porfavor llene los datos a actualizar')</script>";
				        }
					     }
          //Eliminar
           if(isset($_REQUEST['Eliminar'])){
              $Ih_Id=$_REQUEST['Codigo'];
            if(!empty($Ih_Id)){
              $Eliminar="DELETE FROM intensidad_horarias WHERE Ih_Id=$Ih_Id";
              mysqli_query($link,$Eliminar);
              echo "<script languaje='javascript'>alert('Datos eliminados Correctamente.')</script>";
              $Ih_Id="";
              $Ih_Horas="";
              $G_Id="";
              $Asig_Id="";
            }
              else {
                echo "<script languaje='javascript'>alert('Porfavor introduzca el Codigo de la intensidad horaria que desea eliminar')</script>";
              }
           }
          //Limpiar
          if(isset($_REQUEST['Limpiar'])){
              $Ih_Id="";
              $Ih_Horas="";
              $G_Id="";
              $Asig_Id="";
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
          <div class="xIntensidadHoraria" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Intensidad Horaria </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr> <td> <font size="4" class="Titulos">Codigo: <td><input type="text" maxlength="3" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" class="Nombres" name="Codigo" value="<?php echo $Ih_Id; ?>"><br></tr>
                <tr> <td> <font size="4" class="Titulos">Horas: <td><input type="text"  maxlength="2" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" class="Nombres" name="Horas" value="<?php echo $Ih_Horas; ?>"><br></tr>
                <tr> <td> <font size="4" class="Titulos">Grado: <td>
									<?php if(empty($Grados)){?>
		            	<select name="Grados" class="Nombres" value="<?php $Grados;?>">
										<?php while($Consultar_G=mysqli_fetch_array($Datos_Grados))
										{
										?>
			            		<option value="<?php echo $Consultar_G ['G_Id'];?>"> <?php echo $Consultar_G ['G_Id'];?> </option>
			              <?php
			              }
			              ?>
			            	</select>
			          		<?php }else{?>
		            	<select name="Grados" class="Nombres" Value="<?php $Grados ?> ">
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
                <tr> <td> <font size="4" class="Titulos">Asignatura: <td>
									<?php if(empty($Asigs_Id) && empty($Asigs_Nombre)){?>
									<select name="Codigo_Asig" class="Nombres" value="<?php $Asigs_Id;  ?>">
									<?php while($Consultar_Asig=mysqli_fetch_array($Datos_Asig)){ ?>
												<option value="<?php echo $Consultar_Asig ['Asig_Id'];?>"> <?php echo $Consultar_Asig ['Asig_Nombre'];?> </option>
									<?php
									}
									?>
									</select>
									<?php }else{?>
									<select name="Codigo_Asig" class="Nombres" Value="<?php $Asigs_Id ?> ">
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
										<br>
								<section  id="caja"  style="display:none">
								<iframe class="container" src="listar\intensidad_Horaria\index.php" width="1000px" height="500"></iframe>
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

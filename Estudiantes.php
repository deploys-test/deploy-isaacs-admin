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
        .xEstudiantes{
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
                  $Est_Nombre="";
                  $Est_Apellidos="";
                  $Est_Email="";
                  $Est_Telefono="";
                  $Est_FechaNac="";
                  $G_Id="";
                  $Ciud_Id="";
                  $NivelE_Id="";
									$Est_AnoLectivo="";
									$Ciu_Nombre="";
									$Ciu_Id="";
									$NE_Id="";
									$NE_Nombre="";
									$Grados="";

			// Consultar Grados
			$Consultar_Ciud="SELECT * FROM Ciudades";
			$Datos_Ciud=mysqli_query($link,$Consultar_Ciud);

			// Consultar Nivel Educacion
			$Consultar_NivelE="SELECT * FROM Nivel_Educacion";
			$Datos_NivelE=mysqli_query($link,$Consultar_NivelE);

			// Consultar Grados
			$Consultar_Grados="SELECT * FROM Grados";
			$Datos_Grados=mysqli_query($link,$Consultar_Grados);

      //Guardar
      if (isset($_REQUEST['Guardar'])){
                  $Est_Id=$_REQUEST['Codigo'];
                  $Est_Nombre=$_REQUEST['Nombres'];
                  $Est_Apellidos=$_REQUEST['Apellidos'];
                  $Est_Email=$_REQUEST['Email'];
                  $Est_Telefono=$_REQUEST['Telefono'];
                  $Est_FechaNac=$_REQUEST['Fecha_de_Nacimiento'];
                  $G_Id=$_REQUEST['Codigo_Grado'];
                  $Ciud_Id=$_REQUEST['Ciudad'];
                  $NivelE_Id=$_REQUEST['Nivel_de_Educacion'];
									$Est_AnoLectivo=$_REQUEST['AnoLectivo'];

        if (!empty($_REQUEST['Codigo']) && !empty($_REQUEST['Nombres']) && !empty($_REQUEST['Apellidos']) && !empty($_REQUEST['Email'])
         && !empty($_REQUEST['Telefono']) && !empty($_REQUEST['Fecha_de_Nacimiento']) && !empty($_REQUEST['Codigo_Grado'])
         && !empty($_REQUEST['Ciudad']) && !empty($_REQUEST['Nivel_de_Educacion']) && !empty($_REQUEST['AnoLectivo'])){
          $Guardar="INSERT INTO estudiantes (Est_Id, Est_Nombre, Est_Apellidos, Est_Email, Est_Telefono, Est_FechaNac, G_Id, Ciud_Id, NivelE_Id, Est_AnoLectivo) values ('$Est_Id', '$Est_Nombre', '$Est_Apellidos', '$Est_Email', '$Est_Telefono', '$Est_FechaNac', '$G_Id', '$Ciud_Id', '$NivelE_Id', '$Est_AnoLectivo')";
					mysqli_query($link,$Guardar) or die ("<script languaje='javascript'>alert('Los Datos ya Existen.')</script>");
          echo "<script languaje='javascript'>alert('Datos guardados Exitosamente.')</script>";
                  $Est_Id="";
                  $Est_Nombre="";
                  $Est_Apellidos="";
                  $Est_Email="";
                  $Est_Telefono="";
                  $Est_FechaNac="";
									$Est_AnoLectivo="";
                  $G_Id="";
                  $Ciud_Id="";
                  $NivelE_Id="";
									$Ciu_Id="";
									$NE_Id="";
									$NE_Nombre="";
        }else {
          echo "<script languaje='javascript'>alert('Por favor llene Los Datos.')</script>";
        }
      }

      //CONSULTAR
      if (isset($_REQUEST['Consultar'])) {
                $Est_Id=$_REQUEST['Codigo'];
        if (!empty($_REQUEST['Codigo'])) {
                $Consultar="SELECT * FROM estudiantes es, ciudades ci, Nivel_Educacion NE WHERE es.Ciud_Id=ci.Ciud_Id AND NE.NivelE_Id=es.NivelE_Id AND es.Est_Id='$Est_Id'" ;
                $respuesta=mysqli_query($link,$Consultar);
                $frow=mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
          if (empty($frow)) {
            echo"<script languaje='javascript'>alert('El Estudiante No Existe')</script>";
          }
          else{
                $Est_Id=$frow['Est_Id'];
                $Est_Nombre=$frow['Est_Nombre'];
                $Est_Apellidos=$frow['Est_Apellidos'];
                $Est_Email=$frow['Est_Email'];
                $Est_Telefono=$frow['Est_Telefono'];
                $Est_FechaNac=$frow['Est_FechaNac'];
                $Grados=$frow['G_Id'];
                $Ciu_Id=$frow['Ciud_Id'];
								$Ciu_Nombre=$frow['Ciud_Nombre'];
                $NE_Id=$frow['NivelE_Id'];
								$NE_Nombre=$frow['NivelE_Nombre'];
								$Est_AnoLectivo=$frow['Est_AnoLectivo'];

          }
        }
				else {
					echo"<script languaje='javascript'>alert('Ingrese la Identifacion del estudiante')</script>";
				}
      }

      //Actualizar
      if(isset($_REQUEST['Actualizar'])){
                $Est_Id=$_REQUEST['Codigo'];
                $Est_Nombre=$_REQUEST['Nombres'];
                $Est_Apellidos=$_REQUEST['Apellidos'];
                $Est_Email=$_REQUEST['Email'];
                $Est_Telefono=$_REQUEST['Telefono'];
                $Est_FechaNac=$_REQUEST['Fecha_de_Nacimiento'];
                $G_Id=$_REQUEST['Codigo_Grado'];
                $Ciud_Id=$_REQUEST['Ciudad'];
                $NivelE_Id=$_REQUEST['Nivel_de_Educacion'];
								$Est_AnoLectivo=$_REQUEST['AnoLectivo'];
        if(!empty($Est_Id)){
          if(!empty($Est_Nombre)){
            if(!empty($Est_Apellidos)){
              if(!empty($Est_Email)){
                if(!empty($Est_Telefono)){
                  if(!empty($Est_FechaNac)){
                    if(!empty($G_Id)){
                      if(!empty($Ciud_Id)){
                        if(!empty($NivelE_Id)){
													if(!empty($Est_AnoLectivo)){

                $Actualizar="UPDATE estudiantes
								             SET Est_Nombre='$Est_Nombre', Est_Apellidos='$Est_Apellidos', Est_Email='$Est_Email', Est_Telefono='$Est_Telefono',
                						 Est_FechaNac='$Est_FechaNac', G_Id='$G_Id', Ciud_Id='$Ciud_Id', NivelE_Id='$NivelE_Id', Est_AnoLectivo='$Est_AnoLectivo'
														 WHERE Est_Id=$Est_Id";
                $Respuesta1=mysqli_query($link,$Actualizar);
                $Est_Id="";
                $Est_Nombre="";
                $Est_Apellidos="";
                $Est_Email="";
                $Est_Telefono="";
                $Est_FechaNac="";
								$Est_AnoLectivo="";
                $G_Id="";
                $Ciud_Id="";
                $NivelE_Id="";
								$Ciu_Id="";
                if($Respuesta1){
                echo "<script languaje='javascript'>alert('Datos actualizados Correctamente.')</script>";
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
					}
					else {
						echo"<script languaje='javascript'>alert('Ingrese la Identificacion del estudiante')</script>";
					}
        }

      //Eliminar
       if(isset($_REQUEST['Eliminar'])){
        $Est_Id=$_REQUEST['Codigo'];
        if(!empty($Est_Id)){
          $Eliminar="DELETE FROM estudiantes WHERE Est_Id=$Est_Id";
          mysqli_query($link,$Eliminar);
          echo "<script languaje='javascript'>alert('Datos eliminados Correctamente.')</script>";
          $Est_Id="";
          $Est_Nombre="";
          $Est_Apellidos="";
          $Est_Email="";
          $Est_Telefono="";
          $Est_FechaNac="";
          $G_Id="";
          $Ciud_Id="";
          $NivelE_Id="";
					$Ciu_Id="";
					$Est_AnoLectivo="";
        }
       }

      //Limpiar
      if(isset($_REQUEST['Limpiar'])){
          $Est_Id="";
          $Est_Nombre="";
          $Est_Apellidos="";
          $Est_Email="";
          $Est_Telefono="";
          $Est_FechaNac="";
          $G_Id="";
          $Ciud_Id="";
          $NivelE_Id="";
					$Ciu_Id="";
					$Est_AnoLectivo="";
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
          <div class="xEstudiantes" >
            <form action="" class="Class" method="post">
                <p>
             <table border="0" bordercolor="" width ="10%" cellspacing="15" cellpadding="4">
                <h1 class="Nombres"> Estudiantes </h1>
								<hr class="Linea" align="center" noshade="noshade" size="2" width="90%" />
                <tr><td><font size="4" class="Titulos">Identificacion:<td><input type="text" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" maxlength="13" class="Nombres" size="20" name="Codigo" value="<?php echo $Est_Id; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Nombres:<td><input type="text" onkeypress="return soloLetras(event)" maxlength="25" class="Nombres" size="20" name="Nombres" value="<?php echo $Est_Nombre; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Apellidos:<td><input type="text" onkeypress="return soloLetras(event)" maxlength="40" class="Nombres" size="20" name="Apellidos" value="<?php echo $Est_Apellidos; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Email:<td><input type="email" maxlength="50" class="Nombres" size="20" name="Email" value="<?php echo $Est_Email; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Telefono:<td><input type="tel" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" maxlength="10" class="Nombres" size="20" name="Telefono" value="<?php echo $Est_Telefono; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Fecha de Nacimiento:<td><input type="date" name="Fecha_de_Nacimiento" class="Nombres" size="20" value="<?php echo $Est_FechaNac ; ?>"><br></tr>
                <tr><td><font size="4" class="Titulos">Grado:<td>
									<?php if(empty($Grados)){?>
		            	<select name="Codigo_Grado" class="Nombres" value="<?php $Grados;?>">
										<?php while($Consultar_G=mysqli_fetch_array($Datos_Grados))
										{
										?>
			            		<option value="<?php echo $Consultar_G ['G_Id'];?>"> <?php echo $Consultar_G ['G_Id'];?> </option>
			              <?php
			              }
			              ?>
			            	</select>
			          		<?php }else{?>
		            	<select name="Codigo_Grado" class="Nombres" Value="<?php $Grados ?> ">
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

                <tr><td><font size="4" class="Titulos">Ciudad:<td>
							<?php if(empty($Ciu_Id) && empty($Ciu_Nombre)){?>
            	<select name="Ciudad" class="Nombres" value="<?php $Ciu_Id;  ?>">
             	<?php while($Consultar_C=mysqli_fetch_array($Datos_Ciud))
							{
							?>
            		<option value="<?php echo $Consultar_C ['Ciud_Id'];?>"> <?php echo $Consultar_C ['Ciud_Nombre'];?> </option>
              <?php
              }
              ?>
            	</select>
          		<?php }else{?>
            	<select name="Ciudad" class="Nombres" Value="<?php $Ciu_Id ?> ">
              <option value="<?php echo $Ciu_Id ?>"> <?php echo $Ciu_Nombre ?> </option>
              <?php $Consultar_Ciud="SELECT *  FROM Ciudades";
								 $Datos_Ciud=mysqli_query($link,$Consultar_Ciud);
              ?>

							<?php while($Consultar_C=mysqli_fetch_array($Datos_Ciud))
							{
							?>
              	 <option value="<?php echo $Consultar_C ['Ciud_Id'];?>"> <?php echo $Consultar_C ['Ciud_Nombre'];?> </option>
              <?php
              }
              ?>
            </select>
					  <?php } ?>
            <br></tr>

                <tr><td><font size="4" class="Titulos">Nivel de Educacion:<td>
									<?php if(empty($NE_Id) && empty($NE_Nombre)){?>
									<select name="Nivel_de_Educacion" class="Nombres" value="<?php $NE_Id;  ?>">
									<?php while($Consultar_NE=mysqli_fetch_array($Datos_NivelE)){ ?>
												<option value="<?php echo $Consultar_NE ['NivelE_Id'];?>"> <?php echo $Consultar_NE ['NivelE_Nombre'];?> </option>
									<?php
									}
									?>
									</select>
									<?php }else{?>
									<select name="Nivel_de_Educacion" class="Nombres" Value="<?php $NE_Id ?> ">
									<option value="<?php echo $NE_Id ?>"> <?php echo $NE_Nombre ?> </option>
									<?php $Consultar_NivelE="SELECT * FROM Nivel_Educacion";
										 $Datos_NivelE=mysqli_query($link,$Consultar_NivelE);
									?>

									<?php while($Consultar_NE=mysqli_fetch_array($Datos_NivelE)){ ?>
										 <option value="<?php echo $Consultar_NE ['NivelE_Id'];?>"> <?php echo $Consultar_NE ['NivelE_Nombre'];?> </option>
									<?php
										 }
									?>
								</select>
							<?php } ?>
							<br></tr>
							<tr><td><font size="4" class="Titulos">Año Lectivo:<td><input maxlength="4" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" type="text" name="AnoLectivo" class="Nombres" size="20" value="<?php echo $Est_AnoLectivo ; ?>"><br></tr>
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
						<script>
								    function soloLetras(e){
								       key = e.keyCode || e.which;
								       tecla = String.fromCharCode(key).toLowerCase();
								       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
								       especiales = "8-37-39-46";
								       tecla_especial = false
								       for(var i in especiales){
								            if(key == especiales[i]){
								                tecla_especial = true;
								                break;
								            }
								        }

								        if(letras.indexOf(tecla)==-1 && !tecla_especial){
								            return false;
								        }
								    }
								</script>
              </p>
          </form>
        </div>
				<br>
				 <br>
				 <!-- Aqui va el listar -->
				 <section  id="caja"  style="display:none">
	     <iframe class="container" src="listar\Estudiantes\index.php" width="1000px" height="500"></iframe>
		   </section>
				 <br>
              </p>
          </form>
        </div>
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

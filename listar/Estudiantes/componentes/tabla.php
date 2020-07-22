
<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center>
	<h2>Estudiantes</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong> Identificacion </strong> </td>
				<td> <strong> Nombre </strong> </td>
				<td> <strong> Apellidos </strong> </td>
				<td> <strong> Email </strong> </td>
				<td> <strong> Telefono </strong> </td>
				<td> <strong> Fecha Nacimiento </strong> </td>
				<td> <strong> Grado </strong> </td>
				<td> <strong> Ciudad </strong> </td>
				<td> <strong> Nivel de Educacion </strong> </td>
				<td> <strong> Año Lectivo </strong> </td>
				<td> <strong> Eliminar </strong> </td>
			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT Est_Id, Est_Nombre, Est_Apellidos, Est_Email, Est_Telefono, Est_FechaNac, G_Id, Ciud_Nombre, NivelE_Nombre, Est_AnoLectivo
						from estudiantes e, ciudades c, Nivel_Educacion ne where e.Est_Id='$idp' and c.Ciud_Id=e.Ciud_Id and ne.NivelE_Id=e.NivelE_Id";
					}else{
						$sql="SELECT Est_Id, Est_Nombre, Est_Apellidos, Est_Email, Est_Telefono, Est_FechaNac, G_Id, Ciud_Nombre, NivelE_Nombre, Est_AnoLectivo
						from estudiantes e, ciudades c, Nivel_Educacion ne where c.Ciud_Id=e.Ciud_Id and ne.NivelE_Id=e.NivelE_Id";
					}
				}else{
					$sql="SELECT Est_Id, Est_Nombre, Est_Apellidos, Est_Email, Est_Telefono, Est_FechaNac, G_Id, Ciud_Nombre, NivelE_Nombre, Est_AnoLectivo
					from estudiantes e, ciudades c, Nivel_Educacion ne where c.Ciud_Id=e.Ciud_Id and ne.NivelE_Id=e.NivelE_Id";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

				$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
               $ver[7]."||".
							 $ver[8]."||".
							 $ver[8];


			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
			  <td><?php echo $ver[4] ?></td>
		    <td><?php echo $ver[5] ?></td>
		    <td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
		    <td>
								<button class="btn btn-danger glyphicon glyphicon-remove"
							onclick="preguntarSiNo('<?php echo $ver[0] ?>')">

							</button>

			    </td>
			</tr>
			<?php
		}
			 ?>
		</table>
	</div>
</div>

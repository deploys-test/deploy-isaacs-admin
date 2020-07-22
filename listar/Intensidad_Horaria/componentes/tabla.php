
<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center>
	<h2>Intensidad Horaria</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong>Codigo</strong></td>
				<td> <strong>Horas</strong> </td>
				<td> <strong>Grado</strong> </td>
				<td> <strong>Asignatura</strong> </td>
				<td> <strong>Eliminar</strong></td>
			</tr>

			<?php

				if(isset($_SESSION['consulta'])){

					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT ih.Ih_Id, ih.Ih_Horas, g.G_Id, a.Asig_Nombre
									FROM intensidad_horarias ih, asignaturas a, grados g
									WHERE g.G_Id=ih.G_Id AND a.Asig_Id=ih.Asig_Id and ih.G_Id='$idp'";
					}else{
						$sql="SELECT ih.Ih_Id, ih.Ih_Horas, g.G_Id, a.Asig_Nombre
									FROM intensidad_horarias ih, asignaturas a, grados g
									WHERE g.G_Id=ih.G_Id AND a.Asig_Id=ih.Asig_Id";
					}
				}else{
					$sql="SELECT ih.Ih_Id, ih.Ih_Horas, g.G_Id, a.Asig_Nombre
								FROM intensidad_horarias ih, asignaturas a, grados g
								WHERE g.G_Id=ih.G_Id AND a.Asig_Id=ih.Asig_Id";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3];



			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
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

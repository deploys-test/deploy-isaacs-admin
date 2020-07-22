<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
  <center>
	<h2>Profesores Asignaturas</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong>Codigo</strong> </td>
				<td> <strong>Nombre Profesor</strong> </td>
				<td> <strong>Apellido Profesor</strong> </td>
				<td> <strong>Asignatura</strong> </td>
				<td> <strong>Grado</strong> </td>
				<td> <strong>Año Lectivo</strong> </td>
				<td> <strong>Eliminar</strong> </td>

			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT P.P_Id, P.P_Nombre, P.P_Apellidos, A.Asig_Nombre, G.G_Id, PA.PA_AnoLectivo
									FROM prof_asig PA, profesores P, asignaturas A, grados G
									WHERE PA.P_Id=P.P_Id AND A.Asig_Id=PA.Asig_Id AND G.G_Id=PA.G_Id AND P.P_Id='$idp'";
					}else{
						$sql="SELECT P.P_Id, P.P_Nombre, P.P_Apellidos, A.Asig_Nombre, G.G_Id, PA.PA_AnoLectivo
									FROM prof_asig PA, profesores P, asignaturas A, grados G
									WHERE PA.P_Id=P.P_Id AND A.Asig_Id=PA.Asig_Id AND G.G_Id=PA.G_Id";
					}
				}else{
					$sql="SELECT P.P_Id, P.P_Nombre, P.P_Apellidos, A.Asig_Nombre, G.G_Id, PA.PA_AnoLectivo
								FROM prof_asig PA, profesores P, asignaturas A, grados G
								WHERE PA.P_Id=P.P_Id AND A.Asig_Id=PA.Asig_Id AND G.G_Id=PA.G_Id";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
							 $ver[4]."||".
						   $ver[5];

			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
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

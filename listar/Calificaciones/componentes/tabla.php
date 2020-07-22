<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center>
	<h2>Calificaciones</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong> Calificacion N° </strong></td>
				<td> <strong> Identificacion </strong></td>
				<td> <strong> Nombres </strong></td>
				<td> <strong> Apellidos </strong></td>
				<td> <strong> Asignatura </strong></td>
				<td> <strong> Promedio </strong></td>
				<td> <strong> Eliminar </strong></td>
			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT c.Cal_Id, e.Est_Id, e.Est_Nombre, e.Est_Apellidos, A.Asig_Nombre, c.Cal_Promedio
						from calificaciones c, estudiantes e, asignaturas A where a.asig_id=c.asig_Id  and e.Est_Id=c.Est_Id and e.Est_Id='$idp'";
					}else{
						$sql="SELECT c.Cal_Id, e.Est_Id, e.Est_Nombre, e.Est_Apellidos, A.Asig_Nombre, c.Cal_Promedio
						from calificaciones c, estudiantes e, asignaturas A where a.asig_id=c.asig_Id  and e.Est_Id=c.Est_Id";
					}
				}else{
					$sql="SELECT c.Cal_Id, e.Est_Id, e.Est_Nombre, e.Est_Apellidos, A.Asig_Nombre, c.Cal_Promedio
					FROM calificaciones c, estudiantes e,  asignaturas A WHERE a.asig_id=c.asig_Id  AND e.Est_Id=c.Est_Id";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
					

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

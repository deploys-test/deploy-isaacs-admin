<?php
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center>
	<h2>Periodos</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong>Periodo N°</strong> </td>
				<td> <strong>Fecha Inicial</strong> </td>
				<td> <strong>Fecha Final</strong> </td>
				<td> <strong>Editar</strong> </td>
				<td> <strong>Eliminar</strong> </td>

			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT Per_Id,Per_FechaInicial,Per_FechaFinal
						from periodos where Per_Id='$idp'";
					}else{
						$sql="SELECT Per_Id,Per_FechaInicial,Per_FechaFinal
						from periodos";
					}
				}else{
					$sql="SELECT Per_Id,Per_FechaInicial,Per_FechaFinal
						from periodos";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2];



			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
			    <td>
			    		<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

					</button>
			    </td>
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

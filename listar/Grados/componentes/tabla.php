<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
		<center>
		<h2>Grados</h2>
		</center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong> Grado </strong> </td>
				<td> <strong> Eliminar </strong> </td>

			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT *
						from grados where G_Id='$idp'";
					}else{
						$sql="SELECT *
						from grados";
					}
				}else{
					$sql="SELECT *
						from grados";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||";



			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
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

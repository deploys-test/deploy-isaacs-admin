
<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
		<center>
		<h2>Profesores</h2>
	  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Codigo</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Ciudad</td>
				<td>Nivel Educacion</td>
				<td>Eliminar</td>
			</tr>

			<?php

				if(isset($_SESSION['consulta'])){


					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Nombre,NivelE_Nombre
						from profesores p, ciudades c, nivel_educacion ne where P_Id='$idp' and c.Ciud_Id=p.Ciud_Id and ne.NivelE_Id=p.NivelE_Id";
					}else{
						$sql="SELECT P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Nombre,NivelE_Nombre
					  from profesores p, ciudades c, nivel_educacion ne where c.Ciud_Id=p.Ciud_Id and ne.NivelE_Id=p.NivelE_Id";
					}
				}else{
					$sql="SELECT P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Nombre,NivelE_Nombre
						from profesores p, ciudades c, nivel_educacion ne where c.Ciud_Id=p.Ciud_Id and ne.NivelE_Id=p.NivelE_Id";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6];



			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
			    <td><?php echo $ver[4] ?></td>
			    <td><?php echo $ver[5] ?></td>
			    <td><?php echo $ver[6] ?></td>
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

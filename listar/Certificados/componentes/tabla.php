<?php
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center>
	<h2 class="Titul">Certificados</h2>
  </center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button style="visibility:hidden" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td> <strong> Identificacion </strong></td>
				<td> <strong> Nombres </strong></td>
				<td> <strong> Apellidos </strong></td>
				<td> <strong> Grado </strong></td>
				<td> <strong> Nivel Educacion </strong></td>
				<td> <strong> Año Lectivo </strong></td>
				<td> <strong> <span> </span> </strong></td>
			</tr>

			<?php

				$mysqli = new mysqli("localhost", "root", "root", "Isaacs_Admins");
				if ($mysqli->connect_errno) {
						echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
						exit();
				}

				if(isset($_SESSION['consulta'])){
				if($_SESSION['consulta'] > 0){
						$id=$_SESSION['consulta'];
				$consulta= "SELECT E.Est_Id, E.Est_Nombre, E.Est_Apellidos, G.G_Id, NE.NivelE_Nombre, E.Est_AnoLectivo
				            FROM Estudiantes E, Grados G, Nivel_Educacion NE
										WHERE G.G_Id=E.G_Id and NE.NivelE_Id=E.NivelE_Id and Est_Id='$id'";
         }
				 else {
         $consulta= "SELECT E.Est_Id, E.Est_Nombre, E.Est_Apellidos, G.G_Id, NE.NivelE_Nombre, E.Est_AnoLectivo
											FROM Estudiantes E, Grados G, Nivel_Educacion NE
											WHERE G.G_Id=E.G_Id and NE.NivelE_Id=E.NivelE_Id ";
            }
					}else {

		$consulta= "SELECT E.Est_Id, E.Est_Nombre, E.Est_Apellidos, G.G_Id, NE.NivelE_Nombre, E.Est_AnoLectivo
										FROM Estudiantes E, Grados G, Nivel_Educacion NE
										WHERE G.G_Id=E.G_Id and NE.NivelE_Id=E.NivelE_Id ";
                  	}
				if ($resultado = $mysqli->query($consulta))
				{
					while ($fila = $resultado->fetch_row())
					{
						echo "<tr>";
						echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";
						echo "<td>";
					    // Template.php es el documento que contiene la plantilla word y va a recibir los datos
						echo "<a class='btn btn-primary' href='template.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-print'></span> Imprimir</a> ";

						echo "</td>";
						echo "</tr>";
					}
					$resultado->close();
				}
				$mysqli->close();

							 ?>
		</table>
	</div>
</div>

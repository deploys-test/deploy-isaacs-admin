<?php
	require_once "../../conexion.php";
	$conexion=conexion();

	$sql="SELECT P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Id,NivelE_Id
						from profesores";
				$result=mysqli_query($conexion,$sql);

 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Selecciona uno</option>
			<?php
				while($ver=mysqli_fetch_row($result)):
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[0] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>

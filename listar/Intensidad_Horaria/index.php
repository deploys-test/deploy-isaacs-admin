<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>intensidad horaria </title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">


</head>
<body>

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nuevo</h4>
      </div>
      <div class="modal-body">
           <label>Codigo</label>
          <input type="text" name="" id="Ih_Id" class="form-control input-sm">
        	<label>Horas</label>
        	<input type="text" name="" id="Ih_Horas" class="form-control input-sm">
        	<label>Grado</label>
        	<input type="text" name="" id="G_Id" class="form-control input-sm">
        	<label>Asignatura</label>
        	<input type="text" name="" id="Asig_Id" class="form-control input-sm">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden=""  id="idpersona" name="">

          <input type="text" name="" style="visibility:hidden"  id="Ih_Ids" class="form-control input-sm">
      	  <label>Horas</label>
          <input type="text" name="" id="Ih_Horass" class="form-control input-sm">
          <label>Grado</label>
          <input type="text" name="" id="G_Ids" class="form-control input-sm">
          <label>Asignatura</label>
          <input type="text" name="" id="Asig_Ids" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

      </div>
    </div>
  </div>
</div>

</body>
<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          Ih_Id=$('#Ih_Id').val();
          Ih_Horas=$('#Ih_Horas').val();
          G_Id=$('#G_Id').val();
          Asig_Id=$('#Asig_Id').val();
            agregardatos(Ih_Id,Ih_Horas,G_Ig,Asig_Id);
        });


        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>

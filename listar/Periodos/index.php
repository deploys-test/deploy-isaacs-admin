<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Periodo</title>
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
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo</h4>
      </div>
      <div class="modal-body">
           <label>Periodo N°</label>
          <input type="text" maxlength="1" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" name="" id="Per_Id" class="form-control input-sm">
        	<label>Fecha Inicial</label>
        	<input type="date" name="" id="Per_FechaInicial" class="form-control input-sm">
        	<label>Fecha Final</label>
        	<input type="date" name="" id="Per_FechaFinal" class="form-control input-sm">
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
          <label>Periodo N° </label>
          <input type="text" readonly="readonly" maxlength="1" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" name="" id="Per_Ids" class="form-control input-sm">
      	  <label>Fecha Inicial</label>
          <input type="date" name="" id="Per_fechas" class="form-control input-sm">
          <label>Fecha Final</label>
          <input type="date" name="" id="Per_fechals" class="form-control input-sm">
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
          Per_Id=$('#Per_Id').val();
          Per_FechaInicial=$('#Per_FechaInicial').val();
          Per_FechaFinal=$('#Per_FechaFinal').val();

                     agregardatos(Per_Id,Per_FechaInicial,Per_FechaFinal);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>

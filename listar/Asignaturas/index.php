<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Asignaturas</title>
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
        <h4 class="modal-title" id="myModalLabel">Agrega Nueva Asignatura</h4>
      </div>
      <div class="modal-body">
           <label>Codigo</label>
          <input type="text" name="" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" id="Asig_Id" class="form-control input-sm">
        	<label>Asignatura</label>
        	<input type="text" name="" onkeypress="return soloLetras(event)" id="Asig_Nombre" class="form-control input-sm">

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

          <label>Codigo</label>
          <input type="text" name="" readonly="readonly" id="Asig_Ids" class="form-control input-sm">
      	  <label>Asignatura</label>
          <input type="text" name="" id="Asig_Nombres" class="form-control input-sm">

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
          Asig_Id=$('#Asig_Id').val();
          Asig_Nombre=$('#Asig_Nombre').val();
          agregardatos(Asig_Id,Asig_Nombre);
        });
        $('#actualizadatos').click(function(){
          actualizaDatos();
        });
    });
</script>

            <script>
								    function soloLetras(e){
								       key = e.keyCode || e.which;
								       tecla = String.fromCharCode(key).toLowerCase();
								       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
								       especiales = "8-37-39-46";
								       tecla_especial = false
								       for(var i in especiales){
								            if(key == especiales[i]){
								                tecla_especial = true;
								                break;
								            }
								        }

								        if(letras.indexOf(tecla)==-1 && !tecla_especial){
								            return false;
								        }
								    }
								</script>

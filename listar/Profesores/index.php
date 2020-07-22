<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
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
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
           <label>Codigo</label>
          <input type="text" name="" id="P_Id" class="form-control input-sm">
        	<label>Nombre</label>
        	<input type="text" name="" id="P_Nombre" class="form-control input-sm">
        	<label>Apellidos</label>
        	<input type="text" name="" id="P_Apellidos" class="form-control input-sm">
        	<label>Email</label>
        	<input type="text" name="" id="P_Email" class="form-control input-sm">
        	<label>Telefono</label>
        	<input type="text" name="" id="P_Telefono" class="form-control input-sm">
          <label>Ciudad</label>
          <input type="text" name="" id="Ciud_Id" class="form-control input-sm">
          <label>Nivel</label>
          <input type="text" name="" id="NivelE_Id" class="form-control input-sm">

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

          <input type="text" name="" style="visibility:hidden"  id="P_Ids" class="form-control input-sm">
      	  <label>P_Nombre</label>
          <input type="text" name="" id="P_Nombres" class="form-control input-sm">
          <label>P_Apellidos</label>
          <input type="text" name="" id="P_Apellidoss" class="form-control input-sm">
          <label>P_Email</label>
          <input type="text" name="" id="P_Emails" class="form-control input-sm">
          <label>P_telefono</label>
          <input type="text" name="" id="P_Telefonos" class="form-control input-sm">
          <label>Ciud_Id</label>
          <input type="text" name="" id="Ciud_Ids" class="form-control input-sm">
          <label>NivelE_Id</label>
          <input type="text" name="" id="NivelE_Ids" class="form-control input-sm">
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
          P_Id=$('#P_Id').val();
          P_Nombre=$('#P_Nombre').val();
          P_Apellidos=$('#P_Apellidos').val();
          P_Email=$('#P_Email').val();
          P_Telefono=$('#P_Telefono').val();
          Ciud_Id=$('#Ciud_Id').val();
          NivelE_Id=$('#NivelE_Id').val();
            agregardatos(P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Id,NivelE_Id);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>

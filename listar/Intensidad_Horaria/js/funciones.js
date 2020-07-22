

function agregardatos(P_Id,P_Nombre,P_Apellidos,P_Email,P_Telefono,Ciud_Id,NivelE_Id){

	cadena= "P_Id=" + P_Id + 
			"&P_Nombre=" + P_Nombre +
			"&P_Apellidos=" + P_Apellidos +
			"&P_Email=" + P_Email +
			"&P_Telefono=" + P_Telefono +
			"&Ciud_Id=" + Ciud_Id +
			"&NivelE_Id=" + NivelE_Id;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	
	
    d=datos.split('||');

	$('#P_Ids').val(d[0]);
	$('#P_Nombres').val(d[1]);  
	$('#P_Apellidoss').val(d[2]);
	$('#P_Emails').val(d[3]);
	$('#P_Telefonos').val(d[4]);
	$('#Ciud_Ids').val(d[5]);
	$('#NivelE_Ids').val(d[6]);
	

}

function actualizaDatos(){


	Codigo=$('#P_Ids').val();
	nombre=$('#P_Nombres').val();
	apellido=$('#P_Apellidoss').val();
	email=$('#P_Emails').val();
	telefono=$('#P_Telefonos').val();
	ciudad=$('#Ciud_Ids').val();
    Nivel=$('#NivelE_Ids').val();

	cadena= "P_Id=" + Codigo +
			"&P_Nombre=" + nombre + 
			"&P_Apellidos=" + apellido +
			"&P_Email=" + email +
			"&P_Telefono=" + telefono +
			"&Ciud_Id=" + ciudad +
			"&NivelE_Id=" + Nivel;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(P_Id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(P_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(P_Id){

	cadena="P_Id=" + P_Id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
function agregardatos(Ciud_Id,Ciud_Nombre){

	cadena= "NivelE_Id=" + NivelE_Id + 
			"&NivelE_Nombre=" + NivelE_Nombre;

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

	$('#NivelE_Ids').val(d[0]);
	$('#NivelE_Nombres').val(d[1]);  
	
	
	

}

function actualizaDatos(){


	Codigo=$('#NivelE_Ids').val();
	NivelE_Nombre=$('#NivelE_Nombres').val();
	
	

	cadena= "NivelE_Id=" + Codigo +
			"&NivelE_Nombre=" + NivelE_Nombre;

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

function preguntarSiNo(NivelE_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', 
					function(){ eliminarDatos(NivelE_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(NivelE_Id){

	cadena="NivelE_Id=" + NivelE_Id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
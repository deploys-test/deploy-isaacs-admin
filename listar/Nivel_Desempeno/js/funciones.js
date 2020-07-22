function agregardatos(NivelD_Id,NivelD_Concepto,NivelD_RangoMin,NivelD_RangoMax){

	cadena= "NivelD_Id=" + NivelD_Id + 
			"&NivelD_Concepto=" + NivelD_Concepto +
			"&NivelD_RangoMin=" + NivelD_RangoMin +
			"&NivelD_RangoMax=" + NivelD_RangoMax;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("Agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){


	
    d=datos.split('||');

	$('#NivelD_Ids').val(d[0]);
	$('#NivelD_Conceptos').val(d[1]);  
	$('#NivelD_RangoMins').val(d[2]);
	$('#NivelD_RangoMaxs').val(d[3]);
	
	

}

function actualizaDatos(){


	Id=$('#NivelD_Ids').val();
	Concepto=$('#NivelD_Conceptos').val();
	Rango_Minimo=$('#NivelD_RangoMins').val();
	Rango_Maximo=$('#NivelD_RangoMaxs').val();
	
	

	cadena= "NivelD_Id=" + Id +
			"&NivelD_Concepto=" + Concepto +
			"&NivelD_RangoMin=" + Rango_Minimo +
			"&NivelD_RangoMax=" + Rango_Maximo;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito");
			}else{
				alertify.error("Fallo el servidor");
			}
		}
	});

}

function preguntarSiNo(NivelD_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', 
					function(){ eliminarDatos(NivelD_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(NivelD_Id){

	cadena="NivelD_Id=" + NivelD_Id;

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


function agregardatos(Per_Id,Per_FechaInicial,Per_FechaFinal){

	cadena= "Per_Id=" + Per_Id + 
			"&Per_FechaInicial=" + Per_FechaInicial +
			"&Per_FechaFinal=" + Per_FechaFinal;

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

	$('#Per_Ids').val(d[0]);
	$('#Per_fechas').val(d[1]);  
	$('#Per_fechals').val(d[2]);
	
	

}

function actualizaDatos(){


	Codigo=$('#Per_Ids').val();
	Fechainicial=$('#Per_fechas').val();
	Fechafinal=$('#Per_fechals').val();
	

	cadena= "Per_Id=" + Codigo +
			"&Per_FechaInicial=" + Fechainicial + 
			"&Per_FechaFinal=" + Fechafinal;

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

function preguntarSiNo(Per_Id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(Per_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(Per_Id){

	cadena="Per_Id=" + Per_Id;

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
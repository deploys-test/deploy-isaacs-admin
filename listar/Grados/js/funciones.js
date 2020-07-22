function agregardatos(G_Id){

	cadena= "G_Id=" + G_Id;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito");
			}else{
				alertify.error("Fallo el servidor");
			}
		}
	});

}

function agregaform(datos){


	
    d=datos.split('||');

	$('#G_Ids').val(d[0]);
	 
	
	
	

}

function actualizaDatos(){


	Grado=$('#G_Ids').val();
	
	
	

	cadena= "G_Ids=" + Grado;

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

function preguntarSiNo(G_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', 
					function(){ eliminarDatos(G_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(G_Id){

	cadena="G_Id=" + G_Id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito");
				}else{
					alertify.error("Fallo el servidor");
				}
			}
		});
}
function agregardatos(PA_Id,P_Id,Asig_Id,G_Id,PA_AnoLectivo){

	cadena= "PA_Id=" + PA_Id + 
			"&P_Id=" + P_Id +
			"&Asig_Id=" + Asig_Id +
			"&G_Id=" + G_Id +
			"&PA_AnoLectivo=" + PA_AnoLectivo;

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

	$('#PA_Ids').val(d[0]);
	$('#P_Ids').val(d[1]);  
	$('#Asig_Ids').val(d[2]);
	$('#G_Ids').val(d[3]);
	$('#PA_AnoLectivos').val(d[4]);
	
	

}

function actualizaDatos(){


	Id=$('#PA_Ids').val();
	Profesor=$('#P_Ids').val();
	Asignatura=$('#Asig_Ids').val();
	Grado=$('#G_Ids').val();
	Ano_Lectivo=$('#PA_AnoLectivos').val();
	
	

	cadena= "PA_Id=" + Id +
			"&P_Id=" + Profesor +
			"&Asig_Id=" + Asignatura +
			"&G_Id=" + Grado +
			"&PA_AnoLectivo=" + Ano_Lectivo;

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

function preguntarSiNo(PA_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', 
					function(){ eliminarDatos(PA_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(PA_Id){

	cadena="PA_Id=" + PA_Id;

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
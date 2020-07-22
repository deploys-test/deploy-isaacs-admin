function agregardatos(Est_Id,NivelD_Id,Cal_Id,Asig_Id,Cal_Promedio){

	cadena= "Est_Id=" + Est_Id +
			"&NivelD_Id=" + NivelD_Id +
			"&Cal_Id=" + Cal_Id +
			"&Asig_Id=" + Asig_Id +


	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Fallo el servidor");
			}
		}
	});

}

function agregaform(datos){



    d=datos.split('||');

	$('#Est_Ids').val(d[0]);
	$('#NivelD_Ids').val(d[1]);
	$('#Cal_Ids').val(d[2]);
	$('#Asig_Ids').val(d[3]);



}

function actualizaDatos(){


	Estudiante=$('#Est_Ids').val();
	Nivel=$('#NivelD_Ids').val();
	Id=$('#Cal_Ids').val();
	Asignatura=$('#Asig_Ids').val();
	Promedio=$('#Cal_Promedios').val();



	cadena= "Est_Id=" + Estudiante +
			"&NivelD_Id=" + Nivel +
			"&Cal_Id=" + Id +
			"&Asig_Id=" + Asignatura +
			"&Cal_Promedio=" + Promedio;

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

function preguntarSiNo(Est_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro',
					function(){ eliminarDatos(Est_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(Est_Id){

	cadena="Est_Id=" + Est_Id;

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

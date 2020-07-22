function agregardatos(Asig_Id,Asig_Nombre){

	cadena= "Asig_Id=" + Asig_Id +
			"&Asig_Nombre=" + Asig_Nombre;

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

	$('#Asig_Ids').val(d[0]);
	$('#Asig_Nombres').val(d[1]);




}

function actualizaDatos(){


	Codigo=$('#Asig_Ids').val();
	Asignatura=$('#Asig_Nombres').val();



	cadena= "Asig_Id=" + Codigo +
			"&Asig_Nombre=" + Asignatura;

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

function preguntarSiNo(Asig_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro',
					function(){ eliminarDatos(Asig_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(Asig_Id){

	cadena="Asig_Id=" + Asig_Id;

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

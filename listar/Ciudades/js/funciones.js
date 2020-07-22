function agregardatos(Ciud_Id,Ciud_Nombre){

	cadena= "Ciud_Id=" + Ciud_Id + 
			"&Ciud_Nombre=" + Ciud_Nombre;

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

	$('#Ciud_Ids').val(d[0]);
	$('#Ciud_Nombres').val(d[1]);  
	
	
	

}

function actualizaDatos(){


	Codigo=$('#Ciud_Ids').val();
	Ciud_Nombre=$('#Ciud_Nombres').val();
	
	

	cadena= "Ciud_Id=" + Codigo +
			"&Ciud_Nombre=" + Ciud_Nombre;

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

function preguntarSiNo(Ciud_Id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', 
					function(){ eliminarDatos(Ciud_Id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(Ciud_Id){

	cadena="Ciud_Id=" + Ciud_Id;

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
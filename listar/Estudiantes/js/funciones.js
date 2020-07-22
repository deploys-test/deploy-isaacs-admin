

function agregardatos(Est_Id,Est_Nombre,Est_Apellidos,Est_Email,Est_Telefono,Est_FechaNac,G_Id,Ciud_Id,NivelE_Id){
	cadena= "Est_Id=" + Est_Id +
			"&Est_Nombre=" + Est_Nombre +
			"&Est_Apellidos=" + Est_Apellidos +
			"&Est_Email=" + Est_Email +
			"&Est_Telefono=" + Est_Telefono +
			"&Est_FechaNac=" + Est_FechaNac +
			"&G_Id=" + G_Id +
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

	$('#Est_Ids').val(d[0]);
	$('#Est_Nombres').val(d[1]);
	$('#Est_Apellidoss').val(d[2]);
	$('#Est_Emails').val(d[3]);
	$('#Est_Telefonos').val(d[4]);
	$('#Est_FechaNacs').val(d[5]);
	$('#G_Ids').val(d[6]);
	$('#Ciud_Ids').val(d[7]);
	$('#NivelE_Ids').val(d[8]);


}

function actualizaDatos(){


	Codigo=$('#Est_Ids').val();
	nombre=$('#Est_Nombres').val();
	apellido=$('#Est_Apellidoss').val();
	email=$('#Est_Emails').val();
	telefono=$('#Est_Telefonos').val();
  fecha=$('#Est_FechaNacs').val();
	grado=$('#G_Ids').val();
	ciudad=$('#Ciud_Ids').val();
    Nivel=$('#NivelE_Ids').val();

	cadena= "Est_Id=" + Codigo +
			"&Est_Nombre=" + nombre +
			"&Est_Apellidos=" + apellido +
			"&Est_Email=" + email +
			"&Est_Telefono=" + telefono +
			"&Est_FechaNac=" + fecha +
			"&G_Id=" + grado +
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

function preguntarSiNo(Est_Id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
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
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

jQuery(document).ready(function() {
	/* @author AguilarManu
	* PUEDE GENERAR SU TOKEN DIRECTAMENTE DESDE LA PÁGINA OFICIAL DE INEGI 
	* EN: http://www.beta.inegi.org.mx/app/api/denue/v1/tokenVerify.aspx
	* Cuando ya tengas tu token reemplaza el texto 'AQUÍ_VA_TU_TOKEN' de la siguiente variable con él.
	*/
	$('[data-toggle="tooltip"]').tooltip();
	jQuery('.form-buscar').submit(function(event) {
		establecimientos();
	});
});
var token = 'AQUÍ_VA_TU_TOKEN';

var establecimientos = function() {
	event.preventDefault();
	var nombre = $('#nombre').val();
	var longitud = $('#lon').val();
	var latitud = $('#lat').val();
	var metros = $('#mts').val();
	var urlApiBusqueda = "http://www3.inegi.org.mx/sistemas/api/denue/v1/consulta/buscar/" + nombre +"/" + latitud + "," + longitud + "/" + metros + "/" + token;
		
	if(token.includes('AQUÍ')){
		alert("Debes ingresar tu token en el archivo apiDenue.js");
	} else {
		$.ajax({
			url: urlApiBusqueda,
			dataType: 'JSON',
  			beforeSend: function() {
  				swal("Buscando información ... ", "Buscando información, puede tardar unos segundos ...", "success");
  			},
			success: function(result) {
				swal.close();
				mostrarEstablecimientos(result, nombre);
			},
			error: function(e) {
				swal.close();
				if (e.responseText == "No hay resultados.") {
					swal("Error!", "" + e.responseText, "warning");
				}else{
					swal("Error!", "" + e.responseText, "error");
				}
				console.error(e);
			}

		});
	}
}

var mostrarEstablecimientos = function(establecimientos, nombre) {
	console.log(establecimientos);
	var contenido = '';
	var contador = 0;
	for( i = 0; i < establecimientos.length; i ++){
		contador ++;
		contenido += '<div class="col-sm-3"><div class="card" style="width: 16rem;">' +
  					'<img class="card-img-top" src="src/img/establecimiento2.jpg" alt="Card image cap">' +
			  		'<div class="card-body">' +
			    	'<h6 class="card-title">'+establecimientos[i]['Nombre']+'</h6>' +
			    	'<p class="card-text"><strong>Clase-Actividad: </strong> '+establecimientos[i]['Clase_actividad']+'</p>' +
			    	'<a href="#" class="btn btn-primary">VER MÁS</a>' +
			  		'</div>' +
				'</div></div>';
	}
	$('#establecimientos').html(contenido);
	if (contador > 0)
		swal(contador + " "+ nombre, "Se ecnontraron en el lugar establecido", "success");
	else
		swal("Ningún dato encontrado", "No hay ningún establecimiento cerca del lugra establecido", "info");
}
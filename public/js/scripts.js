$(document).ready(function(){
	$("#busquedaCliente").click(function(e){
		e.preventDefault();
		var datoBusqueda = $('input:text[name=busqueda]').val();
		var route = "http://laravel.localhost/facturas";
		var token = document.getElementsByTagName('meta')['_token_'];

		if(datoBusqueda != ''){
			datoEstado = "tiend datos";
			console.log("sadf");
			$.ajax({
				url:route,
				headers: {'X-CSRF-TOKEN': token},
				type:'POST',
				dataType:'json',
				data: {datobusqueda:datoBusqueda}
			});


		}else{
			datoEstado = "NO TIENE DATOS";
			console.log(datoEstado);
		}
		
		/*$.ajax({
           url: route,
           type: 'POST',
           dataType: 'json'
           data: {genre : genre}
        });*/
	});
});

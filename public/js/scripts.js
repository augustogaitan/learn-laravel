
$(document).ready(function(){
	$("#allcliente").click(function(e){
		e.preventDefault();
		
		$.ajax({
           url: route,
           type: 'POST',
           dataType: 'json'
           data: {genre : genre}
        });
	});
});

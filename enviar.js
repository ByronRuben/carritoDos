$('#boton').click(function(){
        $.ajax({
        	url: 'datos.php',
        	type: 'POST',
        	data: $('#Formulario').serialize(),   
        	success: function(res){
        		alert("Registro correcto");
        		$('#respuesta').html(res);
        	}   
	});
   });
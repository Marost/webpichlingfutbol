var jefform = jQuery.noConflict();

jefform(document).on("ready", startEnvio);

function startEnvio(){
	jefform("#btn-enviar").on("click", clickEnvio);
}

function clickEnvio(){
	var nombre = jefform("#nombre").val();
		email = jefform("#email").val();
		mensaje = jefform("#mensaje").val();
		validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

	if (nombre == "") {
	    jefform("#nombre").focus();
	    return false;
	}else if(email == "" || !validacion_email.test(email)){
	    jefform("#email").focus();
	    return false;
	}else if(mensaje == ""){
	    jefform("#mensaje").focus();
	    return false;
	}else {
		jefform('#form-progressbar').removeClass('ocultar');
		var datos = 'nombre='+ nombre + 
					'&email='+ email + 
					'&mensaje='+ mensaje;
		jefform.ajax({
    		type: "POST",
    		url: "libs/form-contacto/envio.php",
    		data: datos,
    		success: function() {
				jefform('#form-progressbar').hide();
				jefform('form#form-contacto').slideUp(1500).show;
				//jefform('.mensaje').removeClass("ocultar");
    		},
			error: function() {
				jefform('#form-progressbar').hide();				
			}
   		});
 		return false;	
	}
}
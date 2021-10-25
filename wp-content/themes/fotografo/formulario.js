// JavaScript Document
$(document).ready(function() {
	$('#formCV').validate({
		rules: {
			nombre: {},
			formIMG: {},
				sexo: {},
			direccion:{},
			telefonoFijo:{},
			telefonoMovil:{},
			email:{},
			estudios:{},
			experiencia:{},
			lenguajesProgramacion:{},
			disenioGrafico:{},
			lenguajesBD:{},
			cms:{}
		}					  
	});	 //end validate
	
	
	$('#formLengProgramacion').click(function() {
	if ($(this).prop('checked')) {
		 $('#ocultoLengProgramacion').slideUp('fast');
	} else {
		 $('#ocultoLengProgramacion').slideDown('fast');
	}
}); // end click()
	
	$('#formDisenioGrafico').click(function() {
	if ($(this).prop('checked')) {
		 $('#ocultoDisenioGrafico').slideUp('fast');
	} else {
		 $('#ocultoDisenioGrafico').slideDown('fast');
	}
}); // end click()
	
	$('#formLenguajesBD').click(function() {
	if ($(this).prop('checked')) {
		 $('#ocultoLengBaseDatos').slideUp('fast');
	} else {
		 $('#ocultoLengBaseDatos').slideDown('fast');
	}
}); // end click()
	
	$('#formCMS').click(function() {
	if ($(this).prop('checked')) {
		 $('#ocultoCms').slideUp('fast');
	} else {
		 $('#ocultoCms').slideDown('fast');
	}
}); // end click()
});
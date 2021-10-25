(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 
$.validator.addMethod('fijoPropio', function (value, element) {
    return this.optional(element) || /^(\+34|0034|34)?9[0-9]{8}$/.test(value);
}, "Por favor entre un número de teléfono fijo válido");

$.validator.addMethod('movilPropio', function (value, element) {
    return this.optional(element) || /^(\+34|0034|34)?[6|7][0-9]{8}$/.test(value);
}, "Por favor entre un número de teléfono móvil válido");

$(document).ready(function() {
	 $(':text:first').focus();
	 
	$('#formCV').validate({
		errorElement: "span",
		rules: {
			nombre: { required: true, maxlength: 30 },
			formIMG: { required: true },
				sexo:{ required: '#formNoIMG:checked' },
				imagen:{ required: '#formSiIMG:checked', extension: "png|gif|jpg" },
			direccion:{ required: true, maxlength: 100 },
			telefonoFijo:{ required: true, fijoPropio: true },
			telefonoMovil:{ required: true, movilPropio: true },
			email:{ required: true, email: true },
			estudios:{ required: true },
			experiencia:{ required: true },
			lenguajesProgramacion:{},
				'ocultoLengProg[]':{ required: '#formLengProgramacion:checked', },
			disenioGrafico:{},
				'ocultoDisGraf[]':{ required: '#formDisenioGrafico:checked' },
			lenguajesBD:{},
				'ocultoLengBD[]':{ required: '#formLenguajesBD:checked' },
			cms:{},
				'ocultCMS[]':{ required: '#formCMS:checked' }
		}, //end rules
		
		messages:{
			nombre:{
				required: 'Campo requerido',
				maxlength: 'Número máximo de caracteres permitidos: 30'	
			},
			formIMG:{
				required: 'Campo requerido'	
			},
				sexo:{ required: 'Campo requerido'},
				imagen:{ required: 'Campo requerido', extension: "Tipo de archivo incorrecto"},
			direccion:{
				required: 'Campo requerido', maxlength: 'Número máximo de caracteres permitidos: 100'	
			},
			telefonoFijo:{
				required: 'Campo requerido'	
			},
			telefonoMovil:{
				required: 'Campo requerido'	
			},
			email:{
				required: 'Campo requerido', email: 'El formato debe ser tipo correo'	
			},
			estudios:{
				required: 'Campo requerido'	
			},
			experiencia:{
				required: 'Campo requerido'	
			},
			lenguajesProgramacion:{},
				'ocultoLengProg[]':{ required: 'Seleccione al menos una opción', },
			disenioGrafico:{},
				'ocultoDisGraf[]':{ required: 'Seleccione al menos una opción' },
			lenguajesBD:{},
				'ocultoLengBD[]':{ required: 'Seleccione al menos una opción' },
			cms:{},
				'ocultCMS[]':{ required: 'Seleccione al menos una opción' }			
		}					  
	});	 //end validate
	

	$('#formSiIMG').click(function() {
		$('#cajaSeleccionImagen input').prop('disabled', false).css('backgroundColor','');
		$('#cajaSeleccionImagen input').css('color','');
		$('#cajaSeleccionImagen').css('color','');
		$('#cajaSexo input').prop('disabled', true).css('backgroundColor','');
		$('#cajaSexo input').css('color','#BBB');
		$('#cajaSexo').css('color','#BBB');
	}); // end click()
	
	$('#formNoIMG').click(function() {
		$('#cajaSexo input').prop('disabled', false).css('backgroundColor','');
		$('#cajaSexo input').css('color','');
		$('#cajaSexo').css('color','');
		$('#cajaSeleccionImagen input').prop('disabled', true).css('backgroundColor','');
		$('#cajaSeleccionImagen input').css('color','#BBB');
		$('#cajaSeleccionImagen').css('color','#BBB');
	}); // end click()
 	

	$('#formLengProgramacion').click(function() {
		if ($(this).prop('checked')) {
			$('#ocultoLengProgramacion').slideDown('fast');
		} else {
	    	$('#ocultoLengProgramacion').slideUp('fast');
		}
	}); // end click()
	
	$('#formDisenioGrafico').click(function() {
		if ($(this).prop('checked')) {
			$('#ocultoDisenioGrafico').slideDown('fast');
		} else {
			$('#ocultoDisenioGrafico').slideUp('fast');
		}
	}); // end click()
	
	$('#formLenguajesBD').click(function() {
		if ($(this).prop('checked')) {
			$('#ocultoLengBaseDatos').slideDown('fast');
		} else {
			$('#ocultoLengBaseDatos').slideUp('fast');
		}
	}); // end click()
	
	$('#formCMS').click(function() {
		if ($(this).prop('checked')) {
			$('#ocultoCMS').slideDown('fast');
		} else {
			$('#ocultoCMS').slideUp('fast');
		}
	}); // end click()
 });//end ready
})( jQuery );

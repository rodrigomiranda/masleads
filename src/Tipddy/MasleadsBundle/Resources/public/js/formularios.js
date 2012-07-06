$(document).ready(function($){
	
	$("input:radio[name=tipddy_masleadsbundle_campanastype\[periodoPrueba\]]").click(function(){
		
		if ($(this).val() == 1) {			
			$('#periodo-prueba').fadeIn('slow');
		} else if($(this).val() == 0) {
			$('#periodo-prueba').fadeOut('slow');
		}
	});
	
})
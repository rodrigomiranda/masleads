$(document).ready(function (){							
   $rutaComuna   = $("input[name=url-comu]").val();   
  // Select para Regiones
   $("#tipddy_masleadsbundle_usuariostype_region").change(function () {
   	 $regionElegida=$(this).val();

         if($regionElegida !=''){
			 $.post($rutaComuna, { reg: $regionElegida }, function(data){
		   	    $("#tipddy_masleadsbundle_usuariostype_comuna").html(data);
	         });
	     } else {
	        $("#tipddy_masleadsbundle_usuariostype_comuna").html("<option value=''>...</option>");		  
	     }
  })
});
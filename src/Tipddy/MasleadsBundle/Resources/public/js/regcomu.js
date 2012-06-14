$(document).ready(function (){							
   $rutaComuna   = $("input[name=url-comu]").val();   
  
   $("#tipddy_masleadsbundle_usuariostype_region").change(function () {
   	 $regionElegida=$(this).val();
         if($regionElegida !=''){
             $path_comuna = $rutaComuna + '/'  + $regionElegida;
			 $.post($path_comuna, { }, function(data){
		   	    $("#tipddy_masleadsbundle_usuariostype_comuna").html(data);
	         });
	     } else {
	        $("#tipddy_masleadsbundle_usuariostype_comuna").html("<option value=''>...</option>");		  
	     }
	     
	     
  })
});
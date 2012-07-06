   var collectionHolder = $('div#todas-paginas');
   
   //configurar un enlace  add_paginas_link
   var $addPaginasLink = $('<a href="#" class="button-embed">Nueva página</a>');
   var $newLinkLi = $('<table><tr><td> </td></tr></table>').append($addPaginasLink);
 
 jQuery(document).ready(function (){
   
    //Añade un enlace para borrar las etiquetas existentes
    collectionHolder.find('table.new-pages').each(function(){
          
           deletePaginasForm($(this));
    
    });
    
   
    //Añade el ancla "Agregar una etiqueta" y las etiquetas li ul
    collectionHolder.append($newLinkLi);
    
   
    
    $addPaginasLink.on('click', function(e){
          //evita crear el enlace con una "#" en la URL 
          e.preventDefault();
          
          //Añade una nueva página form en el siguiente bloque de código
          addPaginasForm(collectionHolder, $newLinkLi);           
      
    });
    
  function addPaginasForm(collectionHolder, $newLinkLi) {
      //obtiene el data-prototype que explicamos anteriormente
      var prototype = collectionHolder.attr('data-prototype');
      
      //Sustituye el $$name$$ en el HTML del prototipo en lugar de ser un número basado en la
      //logintud de la colección actual.
      var newForm = prototype.replace(/\$\$name\$\$/g, collectionHolder.children().length);
      
      //muestra el formulario en la página en un elemento li, antes del enlace agregar una página
      var $newFormLi = $('<div class="new-pages"></div>').append(newForm);
      $newLinkLi.before($newFormLi);
      
      deletePaginasForm($newFormLi);
  }  
  
  function deletePaginasForm($paginaFormLi) {
   
      var $removeFormA = $('<a class="button-embed" href="#">Eliminar página</a>')
      
      $paginaFormLi.find('td.aeliminar').append($removeFormA);
      
      $removeFormA.on('click', function(e){
      
          //evita crear el enlace con un # en la URL
          e.preventDefault();
          
          //quita el li de la etiqueta del formulario
          $paginaFormLi.remove();
      });
   
  }
   
 })
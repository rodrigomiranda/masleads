<?php

/*
 * (c) Rodrigo Miranda <rmg.contacto@gmail.com>
 *
 * This file is part of the Masleads application.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Este archivo pertenece a la aplicación Masleads.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Tipddy\MasleadsBundle\Util;

class Util
{
    static public function getUsuarioURL($nombre, $apellido)
    {
       $nombres = explode(" ", trim($nombre));
       $apellidos = explode(" ", trim($apellido));
       
       $cont_apellidos = count($apellidos);
       
       $nombre_conc = "";
       $apellido_conc = "";
       
       if (is_array($nombres)) {
         $nombres_arr = $nombres;
       } else {
         $nombres_arr[] = $nombres;       
       }
       
       if (is_array($apellidos)) {
          $apellidos_arr = $apellidos;        
       } else {
          $apellidos_arr[] = $apellidos;        
       }
       
       foreach ($nombres_arr as $nombre_arr) {
               
               if ($nombre_arr != "") {
                  $nombre_conc .= strtolower($nombre_arr);
                  $apellido_conc = "";
                  
                  foreach ($apellidos_arr as $apellido_arr) {
                   
                       if ($apellido_arr != "") {
                          $apellido_conc .= strtolower($apellido_arr);
                          $usuario_url = $nombre_conc.$apellido_conc;
                          
                       }
                  
                  }
                                 
               }
        }
        
        return $usuario_url;
     }
}
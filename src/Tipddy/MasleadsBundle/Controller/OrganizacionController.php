<?php 

   namespace Tipddy\MasleadsBundle\Controller;
   
   use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  
  
   class OrganizacionController extends Controller 
   {
       
       public function indexAction()
       {
         return $this->render('TipddyMasleadsBundle:Organizacion:index.html.twig');
       
       }
   
   } 
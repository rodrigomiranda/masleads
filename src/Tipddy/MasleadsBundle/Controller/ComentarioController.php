<?php
  
  namespace Tipddy\MasleadsBundle\Controller;
  
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  
  
  class ComentarioController extends Controller
  {
       
       public function indexAction()
       {
          return $this->render('TipddyMasleadsBundle:Comentario:index.html.twig');
       
       }
  
  }
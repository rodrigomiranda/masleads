<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
       $peticion = $this->getRequest();
       $sesion = $peticion->getSession();
       
       $error = $peticion->attributes->get(
                   SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
       
       );
              
       return $this->render('TipddyMasleadsBundle:Default:index.html.twig', array(         
                     'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                     'error' => $error
        ));
    }
}

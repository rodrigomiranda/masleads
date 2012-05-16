<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PanelController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $organizaciones = $em->getRepository('TipddyMasleadsBundle:Organizaciones')->findAll();
        
        return $this->render('TipddyMasleadsBundle:Panel:index.html.twig', array('organizaciones' => $organizaciones));
    
    }

}


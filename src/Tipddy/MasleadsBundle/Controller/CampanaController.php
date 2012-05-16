<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CampanaController extends Controller
{
    
    public function indexAction()
    {
    
       return $this->render('TipddyMasleadsBundle:Campana:index.html.twig');
    
    }

}
<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TipddyMasleadsBundle:Default:index.html.twig', array('name' => $name));
    }
}

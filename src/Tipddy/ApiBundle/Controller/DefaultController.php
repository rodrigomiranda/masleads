<?php

namespace Tipddy\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TipddyApiBundle:Default:index.html.twig', array('name' => $name));
    }
}

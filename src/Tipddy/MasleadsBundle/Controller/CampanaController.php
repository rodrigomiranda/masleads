<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MakerLabs\PagerBundle\Pager;
use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;


class CampanaController extends Controller
{
    
    public function indexAction($page)
    {
      $em = $this->getDoctrine()->getEntityManager();
         
      $queryOrmAdapter = $em->getRepository('TipddyMasleadsBundle:Campanas')->buildQueryOrmAdapter();
          
      $adapter = new DoctrineOrmAdapter($queryOrmAdapter);
          
      $pager = new Pager($adapter, array('page' => $page, 
                                           'limit' => $this->container->getParameter('tipddy.registers_by_pages')));
              
       return $this->render('TipddyMasleadsBundle:Campana:index.html.twig', array(
                        'pager' => $pager
       ));
    
    }

}
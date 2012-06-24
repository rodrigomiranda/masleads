<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MakerLabs\PagerBundle\Pager;
use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;

use Tipddy\MasleadsBundle\Form\CampanasType;
use Tipddy\MasleadsBundle\Entity\Campanas;



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

   public function nuevoAction()
   {
	   
	   $entity = new Campanas();
	   
	   $form = $this->createForm(new CampanasType(), $entity);
	   
	   return $this->render('TipddyMasleadsBundle:Campana:nuevo.html.twig', array(
	                        'entity' => $entity,
	                        'form'   => $form->createView(),	   
	   ));   
	   
   }

}
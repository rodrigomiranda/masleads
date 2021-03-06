<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MakerLabs\PagerBundle\Pager;
use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;

use Tipddy\MasleadsBundle\Form\CampanasType;
use Tipddy\MasleadsBundle\Entity\Campanas;

use Tipddy\MasleadsBundle\Entity\CampanasSeguimientoPaginas;

use Tipddy\MasleadsBundle\Util\Util;


class CampanaController extends Controller
{
    
    public function indexAction($page)
    {
      $em = $this->getDoctrine()->getEntityManager();
         
      $idOrganizacion = $this->get('session')->get('organizacion_id');
      
      $queryOrmAdapter = $em->getRepository('TipddyMasleadsBundle:Campanas')->buildQueryOrmAdapter($idOrganizacion);
          
      $adapter = new DoctrineOrmAdapter($queryOrmAdapter);
          
      $pager = new Pager($adapter, array('page' => $page, 
                                           'limit' => $this->container->getParameter('tipddy.registers_by_pages')));
              
       return $this->render('TipddyMasleadsBundle:Campaign:index.html.twig', array(
                        'pager' => $pager
       ));
    
    }

   public function newAction()
   {
	   
	   $entity = new Campanas();
	   
	   $pagina1 = new CampanasSeguimientoPaginas();
	   
	   $entity->setPeriodoPrueba(0);
	   $form = $this->createForm(new CampanasType(), $entity);
	   
	   return $this->render('TipddyMasleadsBundle:Campaign:new.html.twig', array(
	                        'entity' => $entity,
	                        'form'   => $form->createView(),	   
	   ));   
	   
   }
   
   public function createAction()
   {
	   $entity = new Campanas();
	   $request = $this->getRequest();
	   $form = $this->createForm(new CampanasType(), $entity);
	   $form->bindRequest($request);
	   
	   if ($form->isValid()) {
		   $em = $this->getDoctrine()->getEntityManager();
		   
		   $entity->setApiKey(Util::getApiKey());
		   
		   $tokenUser = $this->get('security.context')->getToken()->getUser(); 
           $entity->setOrganizacion($tokenUser->getOrganizacion());
		   //paginas
		   $collection = $entity->getPaginas();
		   
		   foreach ($collection as $item) {
		      $item->setCampana($entity);
		   }
		   
		   
		   $em->persist($entity);
		   
		   $em->flush();
		   
		   $this->get('session')->setFlash('result_action', 'ok_save');
		   
		   return $this->redirect($this->generateUrl('campaign_show', array('id'=> $entity->getId())));		  
		    
	   } else {
            $this->get('session')->setFlash('result_action', 'error');
       }
	   
	   return $this->render('TipddyMasleadsBundle:Campaign:new.html.twig', array(
	                        'entity' => $entity,
	                        'form'   => $form->createView(),	   
	   ));   
   }
   
   
   public function showAction($id, $page)
   {
      
      $arr = $this->showEdit($id);            
      $entity = $arr[0]; 
      $showForm = $arr[1];     

       return $this->render('TipddyMasleadsBundle:Campaign:show.html.twig', array(
          'entity'      => $entity,
          'form'        => $showForm->createView(),
          'page'        => $page       
       ));
	   
   }
   
   public function editAction($id, $page)
   {
	  $arr = $this->showEdit($id);            
      $entity = $arr[0]; 
      $form = $arr[1];     

       return $this->render('TipddyMasleadsBundle:Campaign:edit.html.twig', array(
          'entity'      => $entity,
          'form'        => $form->createView(),
          'page'        => $page
       ));
   }
   
   
   public function showEdit($id)
   {
	   $em = $this->getDoctrine()->getEntityManager();
	   $idOrganizacion = $this->get('session')->get('organizacion_id');
	   
	   $entity = $em->getRepository('TipddyMasleadsBundle:Campanas')->findOneBy(array(
	                                'id' => $id,
	                                'organizacion' => $idOrganizacion 
	   ));
	   
	   if (!$entity) {
		   
		   throw $this->createNotFoundException('Unable to find register entity.');		   
	   }
	   
	   $form = $this->createForm(new CampanasType(), $entity);
	   
	      
       return array($entity, $form);
	   
   }
   
   public function updateAction($id, $page)
   {
	   $em = $this->getDoctrine()->getEntityManager();
	   $idOrganizacion = $this->get('session')->get('organizacion_id');
	   
	   $entity = $em->getRepository('TipddyMasleadsBundle:Campanas')->findOneBy(array(
	                                'id' => $id,
	                                'organizacion' => $idOrganizacion
	   ));
	 
	   if (!$entity) {
		   throw $this->createNotFoundException("Unable to find register entity.");
	   }  
	   
	   $form = $this->createForm(new CampanasType(), $entity);
	   	   
	   $previousCollections = array('paginas' => $entity->getPaginas());
	    
	   $request = $this->getRequest();
	   
	   $form->bindRequest($request);
	   
	   if ($form->isValid()) {
		  
		  $entity = $form->getData();
		  
		  foreach ($entity->getPaginas() as $pagina) {
		      $pagina->setCampana($entity);
		  
		  }
		  
		  $em->persist($entity);
		  
		
		  $em->flush();
		   
		
		   $this->get('session')->setFlash('result_action', 'ok_update');
		   
		   return $this->redirect($this->generateUrl('campaign_edit', array('id'=> $entity->getId(), 'page' => $page)));		  
		    
	   } else {
            $this->get('session')->setFlash('result_action', 'error');
       }
       
       return $this->render('TipddyMasleadsBundle:Campaign:edit.html.twig', array(
                               'entity' => $entity,
                               'form' => $form->createView(),
          ));
   
   }
   
   
   public function deleteAction($id, $page)
   {
	   $idOrganizacion = $this->get('session')->get('organizacion_id');
	   $em = $this->getDoctrine()->getEntityManager();
	   
	   $entity = $em->getRepository('TipddyMasleadsBundle:Campanas')->findOneBy(array(
	                                'id' => $id,
	                                'organizacion' => $idOrganizacion
	   ));
	   
	   if (!$entity) {
		   throw $this->createNotFoundException("Unable to find register entity.");		   
	   }
	   
	   $em->remove($entity);
	   $em->flush();
	   
	   return $this->redirect($tthis->generateUrl('campaign', array('page' => $page)));
	   
	   
   }
}
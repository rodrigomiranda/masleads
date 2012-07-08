<?php

namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PanelController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $organizaciones = $em->getRepository('TipddyMasleadsBundle:Organizaciones')->findAll();
        
        return $this->render('TipddyMasleadsBundle:Dashboard:index.html.twig', array('organizaciones' => $organizaciones));
    
    }
    
    
    public function selectAction()
    {
       $em = $this->getDoctrine()->getEntityManager();
       
       $id = $this->getRequest()->get('company');
       
       $entity = $em->getRepository('TipddyMasleadsBundle:Organizaciones')->find($id);

       if (!$entity) {
	       throw $this->createNotFoundException('Unable to find register entity.');           
       }
       
       $this->get('session')->set('organizacion_id', $entity->getId());
       $this->get('session')->set('organizacion_nombre', $entity->getEtiqueta());       
       $this->get('session')->setFlash('result_action', 'ok_select');
       
       return $this->redirect($this->generateUrl('dashboard')); 
          
     	    
    }

}


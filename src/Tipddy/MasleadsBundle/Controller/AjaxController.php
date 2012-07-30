<?php
namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\MasleadsBundle\Entity\EnviosInformacion;
use Tipddy\MasleadsBundle\Form\EnviosInformacionType;


class AjaxController extends Controller
{
    public function comunasAction($reg)
    {
        $request = $this->getRequest();
          
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getEntityManager();
            
            $region = $em->getRepository('TipddyMasleadsBundle:Regiones')->find($reg);
            
           // throw new \Exception("EL id de la región es " . $region->getId());
            
            if (!$region) {              
               throw $this->createNotFoundException('Unable to find register');
            }
            
            return $this->render('TipddyMasleadsBundle:Ajax:comunas.html.twig', array(
                                'region' => $region,
            ));      
        
        }
    }
    
    public function sendinformationAction()
    {
       $entity =  new EnviosInformacion();
       
       $form = $this->createForm(new EnviosInformacionType(), $entity);
       
       return $this->render('TipddyMasleadsBundle:Ajax:sendinformation.html.twig', array(
                            'entity' => $entity,
                            'form'   => $form->createView()
       )); 
    }    
    
    
    public function createinformationAction()
    {
	    $entity = new EnviosInformacion();
	    $form = $this->createForm(new EnviosInformacionType(), $entity);
	    $request = $this->getRequest();
	    
	    $form->bindRequest($request);
	    
	    if ($form->isValid()) {
		    $em = $this->getDoctrine()->getEntityManager();
		    
		    $token = $this->get('security.context')->getToken()->getUser();
		    
		    $entity->setUsuario($token);
		    $em->persist($entity);
		    $em->flush();
		    
		    $this->get('session')->setFlash('result_action', 'ok');
		    
		    return $this->redirect($this->generateUrl('callajax_sendinf'));		    
	    }
	    
	      
       return $this->render('TipddyMasleadsBundle:Ajax:sendinformation.html.twig', array(
                            'entity' => $entity,
                            'form'   => $form->createView()
                            ));
	    
       }
    
}
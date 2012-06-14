<?php
namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
}
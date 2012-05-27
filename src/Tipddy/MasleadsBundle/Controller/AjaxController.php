<?php
namespace Tipddy\MasleadsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AjaxController extends Controller
{
    public function comunasAction($reg)
    {
        $request = $this->getRequest();
        
    //    if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getEntityManager();
            
            $region = $em->getRepository('TipddyMasleadsBundle:Regiones')->find($reg);
            
            if (!$region) {              
               throw $this->createNotFoundException('Unable to find register');
            }
            
            return $this->render('TipddyMasleadsBundle:Ajax:comunas.html.twig', array(
                                'region' => $region,
            ));      
        
      //  }
    }
}
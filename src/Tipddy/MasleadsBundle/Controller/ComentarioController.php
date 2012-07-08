<?php
  
  namespace Tipddy\MasleadsBundle\Controller;
  
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  
  use MakerLabs\PagerBundle\Pager;
  use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;
  
  
  class ComentarioController extends Controller
  {
       
       public function indexAction($page)
       {
          $em = $this->getDoctrine()->getEntityManager();
          
          $queryOrmAdapter = $em->getRepository('TipddyMasleadsBundle:EnviosInformacion')->buildQueryOrmAdapter();
          
          $adapter = new DoctrineOrmAdapter($queryOrmAdapter);
          
          $pager = new Pager($adapter, array('page' => $page, 'limit' => $this->container->getParameter('tipddy.registers_by_pages')));
          
          
          return $this->render('TipddyMasleadsBundle:Comment:index.html.twig', array(
                               'pager' => $pager
          ));
       
       }
       
       public function newAction()
       {
          $entity = new CampanasSeguimientoRespuestas();
          
          $form = $this->createForm(new CampanasSeguimientoRespuestasType(), $entity);
          
          return $this->render('TipddyMasleadsBundle:Comment:new.html.twig', array(
                               'entity' => $entity,
                               'form' => $form->createView(),
          ));
       }
  }
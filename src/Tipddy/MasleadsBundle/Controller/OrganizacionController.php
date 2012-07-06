<?php 

  namespace Tipddy\MasleadsBundle\Controller;
   
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  
  use Tipddy\MasleadsBundle\Entity\Organizaciones;
  use Tipddy\MasleadsBundle\Form\OrganizacionesType;
  
  use MakerLabs\PagerBundle\Pager;
  use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;
  
  
  
   class OrganizacionController extends Controller 
   {
       
       public function indexAction($page)
       {
          $em = $this->getDoctrine()->getEntityManager();
          $queryOrmAdapter = $em->getRepository('TipddyMasleadsBundle:Organizaciones')->buildQueryOrmAdapter();
          
          $adapter = new DoctrineOrmAdapter($queryOrmAdapter);
          
          $pager = new Pager($adapter, array('page' => $page, 'limit' => $this->container->getParameter('tipddy.registers_by_pages')));
 
       
         return $this->render('TipddyMasleadsBundle:Company:index.html.twig', array(
                         'pager' => $pager,
                   ));
       
       }
       
       public function newAction()
       {
          $entity = new Organizaciones();
          
          $form = $this->createForm(new OrganizacionesType(), $entity);
          
          return $this->render('TipddyMasleadsBundle:Company:new.html.twig', array(
                               'entity' => $entity,
                               'form' => $form->createView(), 
           
          ));
       }
      
      public function createAction()
      {
	      $entity = new Organizaciones();
	      $request = $this->getRequest();
	      $form = $this->createForm(new OrganizacionesType(), $entity);	      
	      $form->bindRequest($request);
	      
	      
	      if ($form->isValid()) {
		      $em = $this->getDoctrine()->getEntityManager();
		      
		      $em->persist($entity);

              $em->flush();
              
              $this->get('session')->setFlash('result_action', 'ok_save');
		   
		      return $this->redirect($this->generateUrl('company_show', array('id'=> $entity->getId())));			      
		      
	      } else {
		      $this->get('session')->setFlash('result_action', 'error');		      
	      }    
	      
	      return $this->render('TipddyMasleadsBundle:Company:new.html.twig', array(
                               'entity' => $entity,
                               'form' => $form->createView(),
                               ));  
	      
      } 
   
   } 
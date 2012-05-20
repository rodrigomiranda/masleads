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
 
       
         return $this->render('TipddyMasleadsBundle:Organizacion:index.html.twig', array(
                         'pager' => $pager,
                   ));
       
       }
       
       public function nuevoAction()
       {
          $entity = new Organizaciones();
          
          $form = $this->createForm(new OrganizacionesType(), $entity);
          
          return $this->render('TipddyMasleadsBundle:Organizacion:nuevo.html.twig', array(
                               'entity' => $entity,
                               'form' => $form->createView(), 
           
          ));
       
       }
       
   
   } 
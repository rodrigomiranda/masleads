<?php 

  namespace Tipddy\MasleadsBundle\Controller;
  
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  
  use Tipddy\MasleadsBundle\Entity\Usuarios;
  use Tipddy\MasleadsBundle\Form\UsuariosType;
  
  use MakerLabs\PagerBundle\Pager;
  use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;
  
  
  class UsuarioController extends Controller
  {
       
       public function indexAction($page)
       {
          
          $em = $this->getDoctrine()->getEntityManager();
                    
          $queryOrmAdapter = $em->getRepository('TipddyMasleadsBundle:Usuarios')->buildQueryOrmAdapter();
          
          $adapter = new DoctrineOrmAdapter($queryOrmAdapter);
          
          $pager = new Pager($adapter, array('page' => $page, 'limit' => $this->container->getParameter('tipddy.registers_by_pages')));
          
          
          return $this->render('TipddyMasleadsBundle:Usuario:index.html.twig', array('pager' => $pager));
       
       }
       
       
       public function nuevoAction()
       {
          $entity = new Usuarios();
          $form = $this->createForm(new UsuariosType, $entity);
          
          return $this->render('TipddyMasleadsBundle:Usuario:nuevo.html.twig', array(
                         'entity' => $entity,
                         'form' => $form->createView(),
          ));
       }
  
  }
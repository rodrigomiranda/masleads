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
          
          
          return $this->render('TipddyMasleadsBundle:User:index.html.twig', array('pager' => $pager));
       
       }
       
       
       public function newAction()
       {
          $entity = new Usuarios();
          $form = $this->createForm(new UsuariosType, $entity);
          
          return $this->render('TipddyMasleadsBundle:User:new.html.twig', array(
                         'entity' => $entity,
                         'form' => $form->createView(),
          ));
       }
  
      public function createAction()
      {
                  
         $peticion = $this->getRequest();
         
         $entity = new Usuarios();
         
         $form = $this->createForm(new UsuariosType(), $entity);
         
         $form->bindRequest($peticion);
         
         if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            
            $usuario = $form->getData();
            
            //contraseña Sha512
            $factory = $this->get('security.encoder_factory');
            $code    = $factory->getEncoder($usuario);
            $password = $code->encodePassword($usuario->getPassword(), $usuario->getSalt());
            
            $usuario->setPassword($password);
            
            //session usuario del sistema
            //$user = $this->get('security.context')->getToken()->getUser();
            $organizacion = $em->getRepository('TipddyMasleadsBundle:Organizaciones')->find(1);
            
           // $usuario->setOrganizacion($user->getOrganizacion());
           
            $usuario->setOrganizacion($organizacion);
            
            $em->persist($usuario);
            
            $em->flush();
            
            $this->get('session')->setFlash('result_action', 'ok_save');
            
            return $this->redirect($this->generateUrl('user_edit', array('id' => $entity->getId())));
         
         } else {
            $this->get('session')->setFlash('result_action', 'error');
         }
       
         
         return $this->render('TipddyMasleadsBundle:User:new.html.twig', array(
                              'entity' => $entity,
                              'form' => $form->createView(),
         
         ));
      
      } 
      
      public function editAction($id)
      {
         $em = $this->getDoctrine()->getEntityManager();
         
         $entity = $em->getRepository('TipddyMasleadsBundle:Usuarios')->find($id);
         
         if (!$entity) {         
           throw $this->createNotFoundException('Unable to find register');         
         }
         
         $editForm = $this->createForm(new UsuariosType(), $entity);
         
         
         return $this->render('TipddyMasleadsBundle:User:edit.html.twig', array(
                              'entity' => $entity,
                              'form'   => $editForm->createView(),
         ));
      
      }
      
      public function updateAction($id)
      {
          $em = $this->getDoctrine()->getEntityManager();
          $usuario = $em->getRepository('TipddyMasleadsBundle:Usuarios')->find($id);
          
          if (!$usuario) {
             throw $this->createNotFoundException('Unable to find register');          
          }
          
          $editForm = $this->createForm(new UsuariosType(), $usuario);
          
          $request = $this->getRequest();
          
          $passwordOriginal = $editForm->getData()->getPassword();
          
          $editForm->bindRequest($request);
          
          if ($editForm->isValid()) {
             if (null == $editForm->getData()->getPassword()) {
                  $usuario->setPassword($passwordOriginal);   
             } else {
                 //contraseña Sha512
                $factory = $this->get('security.encoder_factory');
                $code    = $factory->getEncoder($usuario);
                $password = $code->encodePassword($usuario->getPassword(), $usuario->getSalt());
                $usuario->setPassword($password);

             }
             
             $em->persist($usuario);
             $em->flush();
             
             $this->get('session')->setFlash('result_action', 'ok_update');
             return $this->redirect($this->generateUrl('user_edit', array('id' => $usuario->getId())));
          }
          
          return $this->render('TipddyMasleadsBundle:User:edit.html.twig', array(
                               'entity' => $usuario,
                               'form' => $editForm->createView(),
          ));
          
      }
      
  }
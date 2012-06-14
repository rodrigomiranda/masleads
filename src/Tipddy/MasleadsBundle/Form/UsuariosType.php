<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;
use Tipddy\Masleadsbundle\Entity\Usuarios;

///import form events namespace
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Event\DataEvent;


class UsuariosType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
         $factory = $builder->getFormFactory();
    
         
         
     //    throw new \Exception('El valor de region es '.$regionId);
    
        $builder
            ->add('nombre')
            ->add('apellido');
            
            if (null == $options['data']->getId()) {
               $builder->add('login')
                       ->add('password', 'password', array('required' => true));
            } else {
               $builder->add('login', null, array('read_only' => true))
                       ->add('password', 'password', array('required' => false));
            }
            
        $builder
            ->add('rut')
            ->add('cargo')
            ->add('profesion')
            ->add('especialidades')
            ->add('email')
            ->add('email2')
            ->add('codigoPostal')
            ->add('direccion')
            ->add('telefono')
            ->add('telefono2')
            ->add('celular')
            ->add('empresa')
            ->add('paginaWeb')
            ->add('tipoUsuario', null, array('required' => true,
                                             'preferred_choices' => array(5)
                                             ));
          
          /*        
          if (null == $options['data']->getRegion()) {
             $builder->add('comuna', null , array('required' => false, 'empty_value' => '...', 'choices' => array()));       
          } else {           
              $builder->add('comuna', 'entity', array(
                              'required' => false,
                              'class' => 'TipddyMasleadsBundle:Comunas',
                              'empty_value' => 'Seleccione una comuna',
                              'query_builder' => function(EntityRepository $repository) use ($regionId) {
                                      return $repository->createQueryBuilder('c')
                                                        ->where('c.region = :region')
                                                        ->setParameter('region', $regionId)
                                                        ->orderBy('c.id', 'ASC');
                              }));
             }
             
         */
            
            
         $builder->add('region', null, array('empty_value' => 'Seleccione', 'required' => false));
        
           /* Probando Eventos en Formularios */
            $factory = $builder->getFormFactory();

            
          
           
            $refreshComuna = function($form, $region) use ($factory) {
                      $form->add($factory->createNamed('entity', 'comuna', null, array(
                                      'class' => 'TipddyMasleadsBundle:Comunas',
                                      'empty_value' => $region == null ? '...' : 'Seleccione',
                                      'label'    =>  'register.comuna.label',
                                      'query_builder' => function (EntityRepository $repository) use ($region) {
                                              return $repository->createQueryBuilder('c')
                                                               ->where('c.region = :region')
                                                               ->setParameter('region', $region)
                                                               ->orderBy('c.id', 'ASC');
                                                     
                                      },
                                  )));
                            };      
                      
             $builder->addEventListener(FormEvents::PRE_SET_DATA, function (DataEvent $event) use ($refreshComuna){
             
                    $form = $event->getForm();
                    $data = $event->getData();
                    
                    if ($data == null) {
                       $refreshComuna($form, null);                    
                    }
                    
                    if ($data instanceof Usuarios) {
                       $refreshComuna($form, $data->getRegion());
                    }
             });
             
               $builder->addEventListener(FormEvents::PRE_BIND, function (DataEvent $event) use ($refreshComuna){
             
                    $form = $event->getForm();
                    $data = $event->getData();
                    
                 
                    if (array_key_exists('region', $data)) {
                        $refreshComuna($form, $data['region']);
                    }           
            
            
             });           
        
    }


    public function getName()
    {
        return 'tipddy_masleadsbundle_usuariostype';
    }
}

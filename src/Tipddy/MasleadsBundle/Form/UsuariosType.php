<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;


class UsuariosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido');
            
            if (null == $options['data']->getId()) {
               $builder->add('login');
            } else {
                  $builder->add('login', null, array('read_only' => true));
            }
            $builder->add('password', 'repeated', array('type' => 'password', 'first_name' =>'Contraseña', 'second_name' =>'Repita Contraseña'))
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
            ->add('tipoUsuario', null, array('empty_value' => 'Seleccione'));
            /*
            if (null == $options['data']->getId() || null == $options['data']->getRegion()) {
              $builder->add('provincia', null , array('required' => false, 'empty_value' => '...'));            
            
            } else {
               $builder->add('provincia', 'entity', array(
                              'class'=>'TipddyMasleadsBundle:Provincias',
                              'empty_value' => 'Seleccione una provincia',
                              'query_builder' => function(EntityRepository $repository) {
                                               
                                      return $repository->createQueryBuilder('p')
                                                        ->where('p.region = :region')
                                                        ->setParameter('region', $options['data']->getRegion())
                                                        ->orderBy('p.id', 'ASC');
                              }));
            
            }*/
            
          if (null == $options['data']->getRegion()) {
             $builder->add('provincia', null , array('required' => false, 'empty_value' => '...', 'choices' => array()));       
          } else {           
              $builder->add('provincia', 'entity', array(
                              'required' => false, 
                              'class'=>'TipddyMasleadsBundle:Provincias',
                              'empty_value' => 'Seleccione una provincia',
                              'query_builder' => function(EntityRepository $repository) use ($options) {
                                      return $repository->createQueryBuilder('p')
                                                        ->where('p.region = :region')
                                                        ->setParameter('region', $options['data']->getRegion())
                                                        ->orderBy('p.id', 'ASC');
                              }));
             }
            
           $builder->add('region', null, array('required' => false, 'empty_value' => 'Seleccione'));
        
    }

    public function getName()
    {
        return 'tipddy_masleadsbundle_usuariostype';
    }
}

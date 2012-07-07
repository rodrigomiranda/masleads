<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class OrganizacionesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('etiqueta')
            ->add('rut')
            ->add('giro')
            ->add('direccion')
            ->add('pais', null, array('empty_value' => 'Seleccione', 'required' => true))
            ->add('estado', 'choice', array('choices' => array('0' => ' No', '1' => ' Si' ), 'required' => false, 'expanded' => true, 'multiple' => false))
        ;
    }

    public function getName()
    {
        return 'tipddy_masleadsbundle_organizacionestype';
    }
}

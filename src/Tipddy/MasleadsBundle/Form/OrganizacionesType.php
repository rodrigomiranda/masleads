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
            ->add('pais')
            ->add('estado')
            ->add('region')
            ->add('provincia')
        ;
    }

    public function getName()
    {
        return 'tipddy_masleadsbundle_organizacionestype';
    }
}

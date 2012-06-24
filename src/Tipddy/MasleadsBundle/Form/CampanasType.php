<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CampanasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('etiqueta')
            ->add('fechaInicio')
            ->add('fechaTermino')
            ->add('periodoPrueba')
            ->add('fechaInicioPrueba')
            ->add('fechaTerminoPrueba')
            ->add('sitioWeb')
  /*  comentado
            ->add('apiKey')
            ->add('organizacion')
    */
            ->add('industria')
        ;
    }

    public function getName()
    {
        return 'tipddy_masleadsbundle_campanastype';
    }
}

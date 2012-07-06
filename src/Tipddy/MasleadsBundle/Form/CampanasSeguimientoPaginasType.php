<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CampanasSeguimientoPaginasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('etiqueta')
            ->add('url')
          //  ->add('campana')
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
               'data_class' => 'Tipddy\MasleadsBundle\Entity\CampanasSeguimientoPaginas'
        );
    }
    
    public function getName()
    {
        return 'tipddy_masleadsbundle_campanasseguimientopaginastype';
    }
    
}

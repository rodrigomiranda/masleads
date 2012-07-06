<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Tipddy\MasleadsBundle\Form\CampanasSeguimientoPaginasType;

class CampanasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('etiqueta')
            ->add('fechaInicio', null, array('years' => range(2012, 2017)))
            ->add('fechaTermino', null, array('years' => range(2012, 2017)))
            ->add('periodoPrueba', 'choice', array('choices' => array(0 => ' No', 1 =>' Si'), 'required' => false, 'expanded' => true, 'multiple' => false))
            ->add('fechaInicioPrueba', null, array('years' => range(2012, 2017), 'empty_value' => false))
            ->add('fechaTerminoPrueba', null, array('years' => range(2012, 2017), 'empty_value' => false))
            ->add('sitioWeb')
            ->add('industria')
            ->add('paginas', 'collection', array(
                          'type' => new CampanasSeguimientoPaginasType(),
                          'allow_add' => true,
                          'allow_delete' => true,
                          'by_reference' => false, 
                          'required' => false));
         /*   
            if (null != $options['data']->getId()) {
	            $builder->add('apiKey', null, array('read_only' => true));
            }
         */   
            
    }

    public function getDefaultOptions(array $options)
    {
	    return array(
	            'data_class' => 'Tipddy\MasleadsBundle\Entity\Campanas', 
	    );
	    
    } 


    public function getName()
    {
        return 'tipddy_masleadsbundle_campanastype';
    }
    
    
    
    
}

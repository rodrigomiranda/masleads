<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class EnviosInformacionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('tipoEnvioInformacion')
            ->add('informacion', null, array('attr' => array('cols' => 5, 'rows' => 5)))	;
                       
    }

    public function getDefaultOptions(array $options)
    {
	    return array(
	            'data_class' => 'Tipddy\MasleadsBundle\Entity\EnviosInformacion', 
	    );
	    
    } 


    public function getName()
    {
        return 'tipddy_masleadsbundle_envioinformaciontype';
    }    
}

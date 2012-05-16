<?php

namespace Tipddy\MasleadsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsuariosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('usuarioUrl')
            ->add('login')
            ->add('password')
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
            ->add('tipoUsuario')
            ->add('provincia')
            ->add('region')
            ->add('organizacion')
        ;
    }

    public function getName()
    {
        return 'tipddy_masleadsbundle_usuariostype';
    }
}

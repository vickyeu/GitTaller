<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('username')
                ->add('password', 'password')
                ->add('email')
                ->add('preguntasecreta')
                ->add('respuestapregunta');

    }
    public function getName()
    {
        return 'usuario_form';
    }
}
?>

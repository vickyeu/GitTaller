<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class InstanciaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('fechainicio')
                ->add('cantclases')
                ->add('porcentajeasis');

    }
    public function getName()
    {
        return 'instancia_form';
    }
}
?>

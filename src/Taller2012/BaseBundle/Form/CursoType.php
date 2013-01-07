<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class CursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('codigo')
                ->add('nombre');

    }
    public function getName()
    {
        return 'curso_form';
    }
}
?>

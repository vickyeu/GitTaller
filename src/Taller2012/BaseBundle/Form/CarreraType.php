<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class CarreraType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre')
                ->add('categoria')
                ->add('coneau')
                ->add('emiteTitulo')
                ->add('observaciones');
    }
    public function getName()
    {
        return 'carrera_form';
    }
}
?>

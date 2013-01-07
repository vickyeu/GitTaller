<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class LocalidadType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre')
                ->add('CP');
    }
    public function getName()
    {
        return 'localidad_form';
    }
}
?>

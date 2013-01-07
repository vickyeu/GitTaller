<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class ProvinciaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre');
    }
    public function getName()
    {
        return 'provincia_form';
    }
}
?>

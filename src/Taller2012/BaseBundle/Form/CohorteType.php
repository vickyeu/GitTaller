<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class CohorteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('ano')
                ->add('edicion');

    }
    public function getName()
    {
        return 'cohorte_form';
    }
}
?>

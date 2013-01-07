<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class PlanCarreraType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nresol')
                ->add('anoresol')
                ->add('cantoptativ');

    }
    public function getName()
    {
        return 'planCarrera_form';
    }
}
?>

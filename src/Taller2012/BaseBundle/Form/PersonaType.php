<?php

namespace Taller2012\BaseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class PersonaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('apellido')
                ->add('nombre')
                ->add('dni')
                ->add('nacimiento')
                ->add('domicilio')
                ->add('email')
                ->add('telefono')
                ->add('cuil')
                ->add('nacionalidad')
                ->add('nroAlumno')
                ->add('nroProfesor');
                //->add('Persona', 'entity', array('class' => 'Taller2012\BaseBundle\Entity\Localidad'));
    }
    public function getName()
    {
        return 'persona_form';
    }
}
?>

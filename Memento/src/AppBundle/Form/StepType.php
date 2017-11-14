<?php

namespace AppBundle\Form;

use AppBundle\Entity\Step;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StepType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('content')
            ->add('parents', EntityType::class, array(
            // query choices from this entity
            'class' => Step::class,
            // use the User.username property as the visible option string
            'choice_label' => 'title',

            // used to render a select box, check boxes or radios
             'multiple' => true,
            // 'expanded' => true,
        ))->add('childs', EntityType::class, array(
                // query choices from this entity
                'class' => Step::class,
                // use the User.username property as the visible option string
                'choice_label' => 'title',

                // used to render a select box, check boxes or radios
                'multiple' => true,
                // 'expanded' => true,
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Step'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_step';
    }


}

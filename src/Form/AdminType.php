<?php

namespace App\Form;

use App\Entity\Aser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles', CollectionType::class, [
                'entry_type'   => ChoiceType::class,
                'entry_options'  => [
                    'label' => false,
                    'choices' => [
                        'Admin' => 'ROLE_SAPER_ADMIN',
                        'User' => 'ROLE_USER',
                    ],
                ],
      ])
            ->add('password')
            ->add('ForName')
            ->add('LastName')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Aser::class,
        ]);
    }
}

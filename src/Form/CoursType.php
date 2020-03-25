<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('category', EntityType::class,[
                'class'=> Category::class,
                'choice_label'=>'title',
                 'expanded'=> 'true',
                 'multiple'=> 'true',
                // 'placeholder'=>'--|====> Choisir une catégorie  <====|--',
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('c')
                            ->orderBy('c.title','ASC');
                },
                ])
            ->add('imageFile', VichImageType::class, ['required' => false ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}

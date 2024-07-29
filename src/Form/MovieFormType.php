<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Movie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title' , TextType::class ,[
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl  outline-none',
                    'placeholder'=> 'Review Tiltle ...',
                     'name'=>'title'
                ),
                'label' => false,
                'required' => false
            ])

            ->add('releaseYear', IntegerType::class ,[
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-6xl  outline-none',
                    'placeholder'=> 'Release Year ...',
                    'name'=>'releaseYear'
                ),
                'label' => false,
                'required' => false

            ])
            ->add('description', TextareaType::class ,[
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-60 text-6xl  outline-none',
                    'placeholder'=> 'Description ...',
                     'name'=>'description'
                ),
                'label' => false,
                'required' => false

            ])
            ->add('imagePath', FileType::class ,[
                'required' => false ,
                'mapped' => false ,
                'attr' => array(
                    'class' => 'py-10',
                    'placeholder'=> 'Select an Image ...',
                    'name'=>'image'
                ),
                'label' => false,

            ])
            // ->add('actors', EntityType::class, [
            //     'class' => Actor::class,
            //     'choice_label' => 'id',
            //     'multiple' => true,
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}

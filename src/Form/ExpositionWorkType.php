<?php

namespace App\Form;

use App\Entity\ExpositionWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpositionWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,
                [
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ],
            )
            ->add('resume', TextType::class,
                [
                    'required'=> false,
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('width', TextType::class,
                [
                    'required'=> false,
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('height', TextType::class,
                [
                    'required'=> false,
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('support', TextType::class,
                [
                    'required'=> false,
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('File', FileType::class, [
                'required'=> false,
                'row_attr' => ['class' => 'input-group mb-3'],
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'input-group-text']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExpositionWork::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Exposition;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,
                [
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('subTitle',CKEditorType::class,
                [
                    'row_attr' => ['class' => 'input-group mb-3'],
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('works', CollectionType::class, [
                'entry_type' => ExpositionWorkType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'by_reference' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exposition::class,
        ]);
    }
}

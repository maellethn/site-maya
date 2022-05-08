<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre',TextType::class, [
                'row_attr' => ['class'=> 'input-group mb-3'],
                'attr'=> ['class' => 'form-control'],
                'label_attr' => ['class' => 'input-group-text']
            ])
            ->add('Couleur', null, [
                'row_attr' =>['class'=>'input-group mb-3'],
                'attr'=> ['class' => 'form-select'],
                'label_attr' => ['class' => 'input-group-text']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}

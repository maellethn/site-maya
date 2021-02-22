<?php

namespace App\Form;

use App\Entity\Couleur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CouleurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, [
                'row_attr' => ['class'=> 'input-group mb-3'],
                'attr'=> ['class' => 'form-control'],
                'label_attr' => ['class' => 'input-group-text']
            ])
            ->add('hexa',TextType::class, [
                'row_attr' => ['class'=> 'input-group mb-3'],
                'attr'=> ['class' => 'form-control'],
                'label_attr' => ['class' => 'input-group-text']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Couleur::class,
        ]);
    }
}

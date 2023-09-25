<?php

namespace App\Form;

use App\Entity\Acceuil;
use App\Entity\Oeuvre;
use App\Repository\OeuvreRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AcceuilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texte', CKEditorType::class, [
            
                'row_attr' => ['class' => 'input-group mb-3'],
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'input-group-text'],
            ])
            ->add('Oeuvre',EntityType::class ,[
                'class'=>Oeuvre::class,
                'required'=>false,
                'placeholder' => 'Laisser vide',
                'row_attr' =>['class'=>'input-group mb-3'],
                'attr'=> ['class' => 'form-select'],
                'label_attr' => ['class' => 'input-group-text']
                ])
            ->add('puzzle_collection', null, [
                'row_attr' =>['class'=>'input-group mb-3'],
                'attr'=> ['class' => 'form-select'],
                'label_attr' => ['class' => 'input-group-text']
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Acceuil::class,
        ]);
    }
}

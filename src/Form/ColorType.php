<?php

namespace App\Form;

use App\Entity\Color;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            'label' => "name",
            'attr' =>[
                'placeholder'=> 'write the color name',
                'class'=> "form-control"
            ]
        ])
        // ->add('name')
        ->add('save', SubmitType::class, [
            'label'=>" add new color",
            'attr'=>[
              'class' => 'form-control'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // $resolver->setDefaults([
        //     'data_class' => Color::class,
        // ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Brand;
use App\Entity\Car;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model', TextType::class, [
                'label' => "Model",
                'attr' =>[
                    'placeholder'=> 'Car model',
                    'class'=> "form-control"
                ]
            ])
            ->add('ports', NumberType::class, [
                'attr' =>[
                    'placeholder'=> 'Number of Ports',
                    'class'=> "form-control"
                ]
            ])
            ->add('horse_power', NumberType::class, [
                'attr' =>[
                    'placeholder'=> 'Horse Power',
                    'class'=> "form-control"
                ]
            ])
            ->add('kilometers', NumberType::class, [
                'attr' =>[
                    'placeholder'=> 'Kilomiters',
                    'class'=> "form-control"
                ]
            ])
            ->add('fk_brand', EntityType::class, [
                'class'=> Brand::class,
                'choice_label' => "name",
                'placeholder'=> "Choose a brand",
                'label' => "Brand",
                'attr' => [
                    'class'=>"form-control"
                ]
            ])
            ->add('fk_color', EntityType::class, [
                'class' =>'App\Entity\Color',
                'choice_label' =>'name',
                'placeholder' => "Choose a color",
                'label'=>'Color',
                'attr' => [
                    'class'=>"form-control",
                ]
            ])
            ->add('save', SubmitType::class, [
                'label'=>'Add a new car',
                'attr'=>[
                    
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}

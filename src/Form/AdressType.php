<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('street', TextType::class, [
                'label' => "Street",
                'attr' =>[
                    'placeholder'=> 'Street',
                    'class'=> "form-control"
                ]
            ])
            ->add('number', NumberType::class, [
                'attr' =>[
                    'placeholder'=> 'Number of Ports',
                    'class'=> "form-control"
                ]
            ])
            ->add('fk_city', EntityType::class, [
                'class' =>'App\Entity\City',
                'choice_label' =>'name',
                'placeholder' => "Choose a city",
                'label'=>'City',
                'attr' => [
                    'class'=>"form-control",
                ]
            ])
            ->add('State', TextType::class, [
                'label' => "State",
                'attr' =>[
                    'placeholder'=> 'State',
                    'class'=> "form-control"
                ]
            ])
            ->add('complement', TextType::class, [
                'label' => "Complement",
                'attr' =>[
                    'placeholder'=> 'Complement',
                    'class'=> "form-control"
                ]
            ])
           
            // ->add('save', SubmitType::class, [
            //     'label'=>'Add a new car',
            //     'attr'=>[
                    
            //     ]
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}

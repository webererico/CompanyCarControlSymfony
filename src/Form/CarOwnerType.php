<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarOwnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fk_client', EntityType::class, [
                'class'=> Client::class,
                'choice_label' => "name",
                'placeholder'=> "Choose a owner",
                'label' => "Owner",
                'attr' => [
                    'class'=>"form-control"
                ]
            ])
            ->add('save', SubmitType::class, [
                'label'=>"Alter car owner",
                'attr'=>[

                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // $resolver->setDefaults([
        //     'data_class' => Car::class,
        // ]);
    }
}

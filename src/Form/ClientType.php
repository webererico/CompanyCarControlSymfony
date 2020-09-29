<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Name",
                'attr' =>[
                    'placeholder'=> 'write the full name',
                    'class'=> "form-control"
                ]
            ])
            ->add('cpf', TextType::class, [
                'label' => "CPF",
                'attr' =>[
                    'placeholder'=> 'Write the CPF',
                    'class'=> "form-control"
                ]
            ])
            ->add('email',EmailType::class, [
                'label' => "Email",
                'attr' =>[
                    'placeholder'=> 'Write the email',
                    'class'=> "form-control"
                ]
            ])

            ->add('birth_date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr'=> [
                    'placeholder' => 'Birth Date',
                    'class'=> "form-control"
                ]
            ])
            // ->add('fk_adress', EntityType::class, [
            //     'class'=> 'App\Entity\Adress',
            //     'choice_label' => "Adress",
            //     'placeholder'=> "Write te adress",
            //     'label' => "Adress",
            //     'attr' => [
            //         'class'=>"form-control"
            //     ]
            // ])
            ->add('fk_adress')
            ->add('fk_adress', AdressType::class, [
                'label'=> 'id',
                'attr' => [
                    'placeholder'=> 'Complete Adress'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label'=>"Create new client",
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}

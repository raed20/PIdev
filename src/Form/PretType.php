<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fname', null, [
            'label' => 'Full Name',
            'attr' => ['placeholder' => 'Enter your full name']
        ])
        ->add('email', null, [
            'label' => 'Email',
            'attr' => ['placeholder' => 'Enter your email address']
        ])
        ->add('phonenum', null, [
            'label' => 'Phone Number',
            'attr' => ['placeholder' => 'e.g. +216 123 456 78']
        ])
        ->add('amount', null, [
            'label' => 'Amount',
            'attr' => ['placeholder' => 'Enter the loan amount']
        ])
        ->add('duration', null, [
            'label' => 'Duration (months)',
            'attr' => ['placeholder' => 'Enter the loan duration in months (up to 60)']
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

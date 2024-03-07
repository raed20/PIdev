<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class PretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Gender', ChoiceType::class, [
            'choices' => [
                'Male' => 'male',
                'Female' => 'female',
            ],
            'label' => 'Gender',
            'placeholder' => 'Choose an option',
        ])
        ->add('Married', ChoiceType::class, [
            'choices' => [
                'Yes' => 'yes',
                'No' => 'no',
            ],
            'label' => 'Married',
            'placeholder' => 'Choose an option',
        ])
        ->add('Dependents', null, [
            'label' => 'Dependents',
            'attr' => ['placeholder' => 'e.g. 1 ']
        ])
        ->add('Education', ChoiceType::class, [
            'choices' => [
                'Graduated' => 'graduated',
                'Not graduated' => 'not graduated',
            ],
            'label' => 'Education',
            'placeholder' => 'Choose an option',
        ])
        ->add('Selfemployed', ChoiceType::class, [
            'choices' => [
                'Yes' => 'yes',
                'No' => 'no',
            ],
            'label' => 'Self employed',
            'placeholder' => 'Choose an option',
        ])
        ->add('ApplicantIncome', null, [
            'label' => 'Applicant income (DT)',
            'attr' => ['placeholder' => 'Enter your income in DT']
        ])
        ->add('CoapplicantIncome', null, [
            'label' => 'other income (DT)',
            'attr' => ['placeholder' => 'Enter other income in DT']
        ])
        ->add('LoanAmount', null, [
            'label' => 'Loan amount (DT)',
            'attr' => ['placeholder' => 'Enter the loan amount in DT)']
        ])
        ->add('Loan_Amount_Term', null, [
            'label' => 'Loan amount Term',
            'attr' => ['placeholder' => 'Enter the loan amount term in months']
        ])
        ->add('Credit_History', ChoiceType::class, [
            'choices' => [
                'Bad' => 0,
                'Good' => 1,
            ],
            'label' => 'Credit History',
            'placeholder' => 'Choose an option',
        ])
        ->add('Property_Area', ChoiceType::class, [
            'choices' => [
                'Rural' => 'Rural',
                'Urban' => 'Urban',
                'Semi Urban' => 'Semi Urban',
            ],
            'label' => 'Property Area',
            'placeholder' => 'Choose an option',
        ])
        ->add('Loan_Status', ChoiceType::class, [
            'choices' => [
                'On hold' => 'On hold',
                'Approved' => 'Approved',
                'Rejected' => 'Rejected',
            ],
            'label' => 'Loan status',
            'placeholder' => 'Choose an option',
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

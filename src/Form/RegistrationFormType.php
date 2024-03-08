<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email')
        ->add('lastname', null, [
            'constraints' => [
                new NotBlank(['message' => 'Please enter your last name.']),
            ],
        ])
        ->add('numtel', null, [
            'constraints' => [
                new NotBlank(['message' => 'Please enter your phone number.']),
            ],
        ])
        ->add('adresse', null, [
            'constraints' => [
                new NotBlank(['message' => 'Please enter your address.']),
            ],
        ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Fournisseur' => 'ROLE_FOURNISSEUR',
                    'Client' => 'ROLE_CLIENT',
                    
                ],
                
                'required' => true, 
                
                'multiple' => true,
                'expanded' => true,
            ])





            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
            
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                       
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'User Image',
                'required' => false, 
                'mapped' => true, 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

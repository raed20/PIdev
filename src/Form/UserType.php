<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', null, [
            'constraints' => [
                new NotBlank(['message' => 'Please enter your email.']),
                new Assert\Email(['message' => 'The email "{{ value }}" is not a valid email.']),
            ],
        ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'Client' => 'ROLE_CLIENT',
                    'Fournisseur' => 'ROLE_FOURNISSEUR',
                    

                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'attr' => [
                    'class' => 'password-toggle',  
                ],
            ])
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
            
            ->add('image', FileType::class, [
                'label' => 'User Image',
                'required' => false, 
                'mapped' => false,
            ])
            
            
            
            ;}
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

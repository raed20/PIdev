<?php

namespace App\Form;

use App\Entity\Bank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class BankType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('adresse')
            ->add('codeSwift')
            ->add('logo', FileType::class, [
                'label' => 'Photo (JPEG or PNG file)',
                'mapped' => false, // Tells Symfony that there is no property on the Bank entity to store the file path
                'required' => false,// Allow the field to be empty
                'constraints' => [
                    new File([
                        'maxSize' => '1024K',
                        'mimeTypes' =>[
                            'image/jpg',
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image file',
                    ])
                    ],
            ])
            ->add('phonenum');
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bank::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Opportunite;
use SebastianBergmann\CodeCoverage\Util\Percentage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class OpportuniteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('lastprice', MoneyType::class, [
                'label' => 'Laste Price', 'currency' => 'USD'
            ])
            ->add('yesterdaychange', null, ['label' => '24H %',])
            ->add('marketcap', MoneyType::class, [
                'label' => 'Market Cap', 'currency' => 'USD'
            ])
            ->add('description')
            ->add('prix', MoneyType::class, [
                'label' => 'Prix', 'currency' => 'USD'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opportunite::class,
        ]);
    }
}

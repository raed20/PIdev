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
            ->add('name',null,['attr' => ['placeholder' => 'Stock name']])
            ->add('lastprice', null, [
                'label' => 'Last Price','attr' => ['placeholder' => 'Last closing price in dollars']
            ])
            ->add('yesterdaychange', null, [
                'label' => '24H %',
                'attr' => ['placeholder' => 'Change rate']])
            ->add('marketcap', null, [
                'label' => 'Market Cap',
                'attr' => ['placeholder' => 'Market Cap in dollars']])
            ->add('description', null, ['attr' => ['placeholder' => 'Stock Description']])
            ->add('prix', null, [
                'label' => 'Price',
                'attr' => ['placeholder' => 'Price in dollars']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opportunite::class,
        ]);
    }
}

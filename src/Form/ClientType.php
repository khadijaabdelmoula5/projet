<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Name'
            ])
            ->add('address', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Address'
            ])
            ->add('phone_number', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Phone Number'
            ])
            ->add('cin', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'CIN'
            ])
            ->add('user', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'User'
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}

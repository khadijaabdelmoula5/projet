<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', null, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Name',
            
        ])
        ->add('address_project', null, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Address Project',
            
        ])
        ->add('picture', FileType::class, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Picture',
            'mapped' => false,
            'required' => false,  // To make the field optional
            'constraints' => [
                new File([
                    'maxSize' => '2M', // Adjust the maximum file size as needed
                    'mimeTypes' => ['image/*'],
                    'mimeTypesMessage' => 'Please upload a valid image file.',
                    'extensions' => ['jpg', 'jpeg', 'png', 'gif'],
                ]),
            ],
        ])
        ->add('description', null, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Description',
          
        ])
        ->add('project_status', null, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Project Status'
        ])
        ->add('client', null, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Client'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }

}

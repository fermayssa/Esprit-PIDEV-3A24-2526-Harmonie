<?php

namespace App\Form;

use App\Entity\Coursefile;
use App\Entity\Courses;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class CoursefileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('course', EntityType::class, [
                'class' => Courses::class,
                'choice_label' => 'title',
                'constraints' => [new NotBlank()],
            ])
            ->add('upload', FileType::class, [
                'mapped' => false,
                'required' => $options['require_upload'],
                'constraints' => $options['require_upload'] ? [
                    new NotBlank(message: 'Veuillez choisir un fichier.'),
                    new File(maxSize: '50M'),
                ] : [],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coursefile::class,
            'require_upload' => true,
        ]);
        $resolver->setAllowedTypes('require_upload', 'bool');
    }
}

<?php
namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => false,  // ← on gère le label manuellement dans Twig
                'attr'  => [
                    'placeholder' => 'Un titre clair et précis...',
                    'class'       => 'form-input',
                    'maxlength'   => 150,
                ],
                'error_bubbling' => false,
            ])
            ->add('contenu', TextareaType::class, [
                'label' => false,
                'attr'  => [
                    'placeholder' => 'Développe ta question ou ton sujet...',
                    'class'       => 'form-textarea',
                ],
                'error_bubbling' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
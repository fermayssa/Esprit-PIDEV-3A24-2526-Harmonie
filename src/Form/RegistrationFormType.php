<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('userNom', TextType::class, [
                'label' => 'Nom',
                'attr'  => ['placeholder' => 'Votre nom', 'autocomplete' => 'family-name'],
            ])
            ->add('userPrenom', TextType::class, [
                'label' => 'Prénom',
                'attr'  => ['placeholder' => 'Votre prénom', 'autocomplete' => 'given-name'],
            ])
            ->add('userEmail', EmailType::class, [
                'label' => 'Email',
                'attr'  => ['placeholder' => 'votre@email.com', 'autocomplete' => 'email'],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type'            => PasswordType::class,
                'mapped'          => false,
                'first_options'   => ['label' => 'Mot de passe', 'attr' => ['placeholder' => '••••••••']],
                'second_options'  => ['label' => 'Confirmer', 'attr' => ['placeholder' => '••••••••']],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'constraints'     => [
                    new NotBlank(['message' => 'Le mot de passe est obligatoire.']),
                    new Length(['min' => 6, 'minMessage' => 'Minimum 6 caractères.']),
                    new Regex([
                        'pattern' => '/^(?=.*[A-Za-z])(?=.*\d).+$/',
                        'message' => 'Le mot de passe doit contenir au moins une lettre et un chiffre.',
                    ]),
                ],
            ])
            ->add('userDateDeNaissance', TextType::class, [
                'label' => 'Date de naissance',
                'attr'  => ['type' => 'date', 'placeholder' => 'YYYY-MM-DD'],
            ])
            ->add('userSexe', ChoiceType::class, [
                'label'       => 'Sexe',
                'required'    => false,
                'placeholder' => '— Sélectionner —',
                'choices'     => ['Homme' => 'HOMME', 'Femme' => 'FEMME', 'Autre' => 'AUTRE'],
            ])
            ->add('userPoids', NumberType::class, [
                'label'    => 'Poids (kg)',
                'required' => false,
                'attr'     => ['placeholder' => 'ex: 70.5', 'step' => '0.1'],
            ])
            ->add('userTaille', NumberType::class, [
                'label'    => 'Taille (cm)',
                'required' => false,
                'attr'     => ['placeholder' => 'ex: 175'],
            ])
            ->add('userNiveauActivitePhysique', ChoiceType::class, [
                'label'       => "Niveau d'activité",
                'required'    => false,
                'placeholder' => '— Sélectionner —',
                'choices'     => [
                    'Sédentaire'   => 'SEDENTAIRE',
                    'Léger'        => 'LEGER',
                    'Modéré'       => 'MODERE',
                    'Intense'      => 'INTENSE',
                    'Très intense' => 'TRES_INTENSE',
                ],
            ])
            ->add('userNiveauScolaire', ChoiceType::class, [
                'label'       => 'Niveau scolaire',
                'required'    => false,
                'placeholder' => '— Sélectionner —',
                'choices'     => [
                    'Primaire' => 'PRIMAIRE', 'Collège' => 'COLLEGE',
                    'Lycée'    => 'LYCEE',    'Licence'  => 'LICENCE',
                    'Master'   => 'MASTER',   'Doctorat' => 'DOCTORAT',
                    'Autre'    => 'AUTRE',
                ],
            ])
            ->add('userEtablissementScolaire', TextType::class, [
                'label'    => 'Établissement',
                'required' => false,
                'attr'     => ['placeholder' => 'Nom de votre établissement'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => User::class]);
    }
}

<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('userNom')
            ->add('userPrenom')
            ->add('userEmail')
            ->add('userPassword')
            ->add('userDateDeNaissance')
            ->add('userSexe')
            ->add('userPoids')
            ->add('userTaille')
            ->add('userNiveauActivitePhysique')
            ->add('userNiveauScolaire')
            ->add('userEtablissementScolaire')
            ->add('dateInscription')
            ->add('typeUtilisateur')
            ->add('isActive')
            ->add('userImagePath')
            ->add('faceImagePath')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

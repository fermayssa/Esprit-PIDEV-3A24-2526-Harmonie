<?php

namespace App\Form;

use App\Entity\Calendrier;
use App\Entity\Evenement;
use App\Entity\Salle;
use App\Entity\User;
use App\Repository\SalleRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'class' => 'harmony-input',
                    'placeholder' => 'Ex. Réunion projet, Examen, Soirée…',
                    'maxlength' => 100,
                    'autocomplete' => 'off',
                ],
                'label_attr' => ['class' => 'harmony-label'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'harmony-textarea',
                    'placeholder' => 'Contexte, ordre du jour…',
                    'rows' => 5,
                ],
                'label_attr' => ['class' => 'harmony-label'],
            ])
            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Date et heure de début',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'harmony-input'],
                'label_attr' => ['class' => 'harmony-label'],
            ])
            ->add('dateFin', DateTimeType::class, [
                'label' => 'Date et heure de fin',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'harmony-input'],
                'label_attr' => ['class' => 'harmony-label'],
            ])
            ->add('eventType', ChoiceType::class, [
                'label' => 'Type d’événement',
                'required' => true,
                'choices' => [
                    'Cours' => 'cours',
                    'Réunion' => 'reunion',
                    'Loisir' => 'loisir',
                    'Autre' => 'autre',
                ],
                'placeholder' => '— Choisir —',
                'attr' => [
                    'class' => 'harmony-select js-evenement-event-type',
                ],
                'choice_attr' => static fn () => ['class' => 'js-evenement-type-option'],
                'label_attr' => ['class' => 'harmony-label'],
                'row_attr' => ['class' => 'harmony-field harmony-field-event-type'],
            ])
            ->add('lieuType', ChoiceType::class, [
                'label' => 'Lieu',
                'required' => true,
                'choices' => [
                    'Présentiel' => 'presentiel',
                    'En ligne' => 'en_ligne',
                ],
                'expanded' => true,
                'label_attr' => ['class' => 'harmony-label'],
                'row_attr' => [
                    'class' => 'harmony-field harmony-field-lieu-type harmony-lieu-type-radios js-evenement-lieu-type',
                ],
            ])
            ->add('lieuAdresse', TextType::class, [
                'label' => 'Où ?',
                'required' => false,
                'attr' => [
                    'class' => 'harmony-input js-evenement-lieu-adresse',
                    'placeholder' => 'Adresse, campus, ou « esprit » pour choisir une salle',
                    'maxlength' => 255,
                    'autocomplete' => 'off',
                ],
                'label_attr' => ['class' => 'harmony-label'],
                'row_attr' => ['class' => 'harmony-field harmony-field-lieu-presentiel js-evenement-lieu-presentiel'],
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'label' => 'Choisir une salle',
                'required' => false,
                'placeholder' => '— Sélectionner une salle —',
                'attr' => [
                    'class' => 'harmony-select js-evenement-salle-select',
                ],
                'label_attr' => ['class' => 'harmony-label'],
                'row_attr' => [
                    'class' => 'harmony-field harmony-field-salle-esprit js-evenement-salle-row',
                    'style' => 'display:none;',
                ],
                'query_builder' => static function (SalleRepository $r) {
                    return $r->createQueryBuilder('s')
                        ->andWhere('s.disponible = :d')
                        ->setParameter('d', true)
                        ->orderBy('s.nom', 'ASC');
                },
            ])
            ->add('priorite', IntegerType::class, [
                'label' => 'Priorité',
                'required' => false,
                'attr' => [
                    'class' => 'harmony-input',
                    'placeholder' => '1 = haute, 5 = basse',
                    'min' => 0,
                ],
                'label_attr' => ['class' => 'harmony-label'],
            ])
            ->add('rappelActif', CheckboxType::class, [
                'label' => 'Rappel actif',
                'required' => false,
                'row_attr' => ['class' => 'harmony-field--checkbox'],
            ])
            ->add('calendrier', EntityType::class, [
                'class' => Calendrier::class,
                'choice_label' => static fn (Calendrier $c): string => sprintf('Calendrier n°%d', $c->getId() ?? 0),
                'label' => 'Calendrier',
                'required' => false,
                'attr' => ['class' => 'harmony-select'],
                'label_attr' => ['class' => 'harmony-label'],
            ]);

        if ($options['admin_mode']) {
            $builder
                ->add('proprietaire', EntityType::class, [
                    'class' => User::class,
                    'label' => 'Utilisateur (propriétaire)',
                    'required' => false,
                    'placeholder' => '— Aucun —',
                    'choice_label' => static fn (User $u): string => $u->getUserPrenom().' '.$u->getUserNom().' ('.$u->getUserEmail().')',
                    'attr' => ['class' => 'harmony-select'],
                    'label_attr' => ['class' => 'harmony-label'],
                ])
                ->add('approuve', CheckboxType::class, [
                    'label' => 'Approuvé',
                    'required' => false,
                    'row_attr' => ['class' => 'harmony-field--checkbox'],
                ]);
        }

        $builder->add('submit', SubmitType::class, [
            'label' => '✓ Enregistrer',
            'attr' => ['class' => 'harmony-btn-submit'],
            'row_attr' => ['class' => 'harmony-form-row-submit'],
        ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event): void {
            $data = $event->getData();
            if (!\is_array($data)) {
                return;
            }
            if (($data['lieuType'] ?? '') === 'en_ligne') {
                $data['salle'] = null;
                $data['lieuAdresse'] = null;
            }
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
            'admin_mode' => false,
        ]);
        $resolver->setAllowedTypes('admin_mode', 'bool');
    }
}

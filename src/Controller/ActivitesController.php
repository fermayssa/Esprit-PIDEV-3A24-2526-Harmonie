<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Exercice;
use App\Repository\ActiviteRepository;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/activites')]
class ActivitesController extends AbstractController
{
    // ══════════════════════════════════════════════════════
    // PAGE PRINCIPALE
    // ══════════════════════════════════════════════════════
    #[Route('', name: 'activites')]
    public function index(
        ActiviteRepository $activiteRepo,
        ExerciceRepository $exerciceRepo
    ): Response {
        return $this->render('activites/index.html.twig', [
            'activites'           => $activiteRepo->findAllOrderedByDate(),
            'exercices'           => $exerciceRepo->findAllOrderedByName(),
            'totalCaloriesBrulees' => $activiteRepo->getTotalCaloriesBrulees(),
            'totalMinutes'        => $activiteRepo->getTotalMinutes(),
        ]);
    }

    // ══════════════════════════════════════════════════════
    // CRUD EXERCICE
    // ══════════════════════════════════════════════════════

    #[Route('/exercice/new', name: 'exercice_new', methods: ['GET', 'POST'])]
    public function newExercice(
        Request $request,
        EntityManagerInterface $em,
        ValidatorInterface $validator
    ): Response {
        $exercice = new Exercice();
        $errors   = [];

        if ($request->isMethod('POST')) {
            $exercice->setNomExercice(trim($request->request->get('nomExercice', '')));
            $exercice->setTypeExercice($request->request->get('typeExercice', ''));
            $url = trim($request->request->get('videoExercice', ''));
            $exercice->setVideoExercice($url !== '' ? $url : null);

            $violations = $validator->validate($exercice);
            if (count($violations) === 0) {
                $em->persist($exercice);
                $em->flush();
                $this->addFlash('success', 'Exercice « ' . $exercice->getNomExercice() . ' » ajouté !');
                return $this->redirectToRoute('activites');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('activites/exercice_form.html.twig', [
            'exercice' => $exercice,
            'errors'   => $errors,
            'mode'     => 'create',
        ]);
    }

    #[Route('/exercice/{id}/edit', name: 'exercice_edit', methods: ['GET', 'POST'])]
    public function editExercice(
        Exercice $exercice,
        Request $request,
        EntityManagerInterface $em,
        ValidatorInterface $validator
    ): Response {
        $errors = [];

        if ($request->isMethod('POST')) {
            $exercice->setNomExercice(trim($request->request->get('nomExercice', '')));
            $exercice->setTypeExercice($request->request->get('typeExercice', ''));
            $url = trim($request->request->get('videoExercice', ''));
            $exercice->setVideoExercice($url !== '' ? $url : null);

            $violations = $validator->validate($exercice);
            if (count($violations) === 0) {
                $em->flush();
                $this->addFlash('success', 'Exercice modifié avec succès !');
                return $this->redirectToRoute('activites');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('activites/exercice_form.html.twig', [
            'exercice' => $exercice,
            'errors'   => $errors,
            'mode'     => 'edit',
        ]);
    }

    #[Route('/exercice/{id}/delete', name: 'exercice_delete', methods: ['GET', 'POST'])]
    public function deleteExercice(
        Exercice $exercice,
        EntityManagerInterface $em
    ): Response {
        $nom = $exercice->getNomExercice();
        $em->remove($exercice);
        $em->flush();
        $this->addFlash('success', 'Exercice « ' . $nom . ' » supprimé.');
        return $this->redirectToRoute('activites');
    }

    // ══════════════════════════════════════════════════════
    // CRUD ACTIVITE
    // ══════════════════════════════════════════════════════

    #[Route('/activite/new', name: 'activite_new', methods: ['GET', 'POST'])]
    public function newActivite(
        Request $request,
        EntityManagerInterface $em,
        ExerciceRepository $exerciceRepo,
        ValidatorInterface $validator
    ): Response {
        $activite  = new Activite();
        $exercices = $exerciceRepo->findAllOrderedByName();
        $errors    = [];

        if ($request->isMethod('POST')) {
            $exerciceId = $request->request->get('exerciceId');
            $exercice   = $exerciceId ? $exerciceRepo->find($exerciceId) : null;

            $activite->setExercice($exercice);
            $activite->setDureeMinutes((int) $request->request->get('dureeMinutes', 0));
            $activite->setCaloriesBrulees((int) $request->request->get('caloriesBrulees', 0));
            $activite->setNbSeries($request->request->get('nbSeries') !== '' ? (int) $request->request->get('nbSeries') : null);
            $activite->setNbRepetitions($request->request->get('nbRepetitions') !== '' ? (int) $request->request->get('nbRepetitions') : null);
            $activite->setPoids($request->request->get('poids') !== '' ? (float) $request->request->get('poids') : null);
            $activite->setNotes(trim($request->request->get('notes', '')) ?: null);

            $dateStr = $request->request->get('dateActivite', '');
            $date    = $dateStr ? \DateTime::createFromFormat('Y-m-d', $dateStr) : new \DateTime();
            $activite->setDateActivite($date ?: new \DateTime());

            $violations = $validator->validate($activite);
            if (count($violations) === 0) {
                $em->persist($activite);
                $em->flush();
                $this->addFlash('success', 'Séance enregistrée avec succès !');
                return $this->redirectToRoute('activites');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('activites/activite_form.html.twig', [
            'activite'  => $activite,
            'exercices' => $exercices,
            'errors'    => $errors,
            'mode'      => 'create',
        ]);
    }

    #[Route('/activite/{id}/edit', name: 'activite_edit', methods: ['GET', 'POST'])]
    public function editActivite(
        Activite $activite,
        Request $request,
        EntityManagerInterface $em,
        ExerciceRepository $exerciceRepo,
        ValidatorInterface $validator
    ): Response {
        $exercices = $exerciceRepo->findAllOrderedByName();
        $errors    = [];

        if ($request->isMethod('POST')) {
            $exerciceId = $request->request->get('exerciceId');
            $exercice   = $exerciceId ? $exerciceRepo->find($exerciceId) : null;

            $activite->setExercice($exercice);
            $activite->setDureeMinutes((int) $request->request->get('dureeMinutes', 0));
            $activite->setCaloriesBrulees((int) $request->request->get('caloriesBrulees', 0));
            $activite->setNbSeries($request->request->get('nbSeries') !== '' ? (int) $request->request->get('nbSeries') : null);
            $activite->setNbRepetitions($request->request->get('nbRepetitions') !== '' ? (int) $request->request->get('nbRepetitions') : null);
            $activite->setPoids($request->request->get('poids') !== '' ? (float) $request->request->get('poids') : null);
            $activite->setNotes(trim($request->request->get('notes', '')) ?: null);

            $dateStr = $request->request->get('dateActivite', '');
            $date    = $dateStr ? \DateTime::createFromFormat('Y-m-d', $dateStr) : new \DateTime();
            $activite->setDateActivite($date ?: new \DateTime());

            $violations = $validator->validate($activite);
            if (count($violations) === 0) {
                $em->flush();
                $this->addFlash('success', 'Séance modifiée avec succès !');
                return $this->redirectToRoute('activites');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('activites/activite_form.html.twig', [
            'activite'  => $activite,
            'exercices' => $exercices,
            'errors'    => $errors,
            'mode'      => 'edit',
        ]);
    }

    #[Route('/activite/{id}/delete', name: 'activite_delete', methods: ['GET', 'POST'])]
    public function deleteActivite(
        Activite $activite,
        EntityManagerInterface $em
    ): Response {
        $em->remove($activite);
        $em->flush();
        $this->addFlash('success', 'Séance supprimée.');
        return $this->redirectToRoute('activites');
    }
}
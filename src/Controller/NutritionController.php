<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Entity\Consommation;
use App\Repository\AlimentRepository;
use App\Repository\ConsommationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/nutrition')]
class NutritionController extends AbstractController
{
    // ══════════════════════════════════════════════════════
    // PAGE PRINCIPALE
    // ══════════════════════════════════════════════════════
    #[Route('', name: 'nutrition')]
    public function index(
        AlimentRepository $alimentRepo,
        ConsommationRepository $consoRepo
    ): Response {
        $consommations  = $consoRepo->findTodayConsommations();
        $aliments       = $alimentRepo->findAllOrderedByName();
        $totalKcal      = $consoRepo->getTotalCaloriesToday();

        // Calcul des macros du jour
        $totalProteines = 0;
        $totalGlucides  = 0;
        $totalLipides   = 0;
        foreach ($consommations as $c) {
            if ($c->getAliment()) {
                $ratio = $c->getPoidsGrammes() / 100;
                $totalProteines += $c->getAliment()->getProteines() * $ratio;
                $totalGlucides  += $c->getAliment()->getGlucides()  * $ratio;
                $totalLipides   += $c->getAliment()->getLipides()   * $ratio;
            }
        }

        return $this->render('nutrition/index.html.twig', [
            'consommations'  => $consommations,
            'aliments'       => $aliments,
            'totalKcal'      => round($totalKcal),
            'totalProteines' => round($totalProteines, 1),
            'totalGlucides'  => round($totalGlucides,  1),
            'totalLipides'   => round($totalLipides,   1),
        ]);
    }

    // ══════════════════════════════════════════════════════
    // CRUD ALIMENT
    // ══════════════════════════════════════════════════════

    #[Route('/aliment/new', name: 'aliment_new', methods: ['GET', 'POST'])]
    public function newAliment(
        Request $request,
        EntityManagerInterface $em,
        ValidatorInterface $validator
    ): Response {
        $aliment = new Aliment();
        $errors  = [];

        if ($request->isMethod('POST')) {
            $aliment->setNomAliment(trim($request->request->get('nomAliment', '')));
            $aliment->setCaloriesPour100g((int) $request->request->get('caloriesPour100g', 0));
            $aliment->setProteines((float) $request->request->get('proteines', 0));
            $aliment->setGlucides((float)  $request->request->get('glucides',  0));
            $aliment->setLipides((float)   $request->request->get('lipides',   0));

            $violations = $validator->validate($aliment);
            if (count($violations) === 0) {
                $em->persist($aliment);
                $em->flush();
                $this->addFlash('success', 'Aliment « ' . $aliment->getNomAliment() . ' » ajouté avec succès !');
                return $this->redirectToRoute('nutrition');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('nutrition/aliment_form.html.twig', [
            'aliment' => $aliment,
            'errors'  => $errors,
            'mode'    => 'create',
        ]);
    }

    #[Route('/aliment/{id}/edit', name: 'aliment_edit', methods: ['GET', 'POST'])]
    public function editAliment(
        Aliment $aliment,
        Request $request,
        EntityManagerInterface $em,
        ValidatorInterface $validator
    ): Response {
        $errors = [];

        if ($request->isMethod('POST')) {
            $aliment->setNomAliment(trim($request->request->get('nomAliment', '')));
            $aliment->setCaloriesPour100g((int) $request->request->get('caloriesPour100g', 0));
            $aliment->setProteines((float) $request->request->get('proteines', 0));
            $aliment->setGlucides((float)  $request->request->get('glucides',  0));
            $aliment->setLipides((float)   $request->request->get('lipides',   0));

            $violations = $validator->validate($aliment);
            if (count($violations) === 0) {
                $em->flush();
                $this->addFlash('success', 'Aliment modifié avec succès !');
                return $this->redirectToRoute('nutrition');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('nutrition/aliment_form.html.twig', [
            'aliment' => $aliment,
            'errors'  => $errors,
            'mode'    => 'edit',
        ]);
    }

    #[Route('/aliment/{id}/delete', name: 'aliment_delete', methods: ['GET', 'POST'])]
    public function deleteAliment(
        Aliment $aliment,
        EntityManagerInterface $em
    ): Response {
        $nom = $aliment->getNomAliment();
        $em->remove($aliment);
        $em->flush();
        $this->addFlash('success', 'Aliment « ' . $nom . ' » supprimé.');
        return $this->redirectToRoute('nutrition');
    }

    // ══════════════════════════════════════════════════════
    // CRUD CONSOMMATION
    // ══════════════════════════════════════════════════════

    #[Route('/consommation/new', name: 'consommation_new', methods: ['GET', 'POST'])]
    public function newConsommation(
        Request $request,
        EntityManagerInterface $em,
        AlimentRepository $alimentRepo,
        ValidatorInterface $validator
    ): Response {
        $consommation = new Consommation();
        $aliments     = $alimentRepo->findAllOrderedByName();
        $errors       = [];

        if ($request->isMethod('POST')) {
            $alimentId = $request->request->get('alimentId');
            $aliment   = $alimentId ? $alimentRepo->find($alimentId) : null;

            $consommation->setAliment($aliment);
            $consommation->setTypeRepas($request->request->get('typeRepas', ''));
            $consommation->setPoidsGrammes((int) $request->request->get('poidsGrammes', 0));
            $consommation->setQuantiteEauMl($request->request->get('quantiteEauMl') !== '' ? (int) $request->request->get('quantiteEauMl') : null);
            $consommation->setDateConsommation(new \DateTime());

            $violations = $validator->validate($consommation);
            if (count($violations) === 0) {
                $em->persist($consommation);
                $em->flush();
                $this->addFlash('success', 'Repas ajouté au journal !');
                return $this->redirectToRoute('nutrition');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('nutrition/consommation_form.html.twig', [
            'consommation' => $consommation,
            'aliments'     => $aliments,
            'errors'       => $errors,
            'mode'         => 'create',
        ]);
    }

    #[Route('/consommation/{id}/edit', name: 'consommation_edit', methods: ['GET', 'POST'])]
    public function editConsommation(
        Consommation $consommation,
        Request $request,
        EntityManagerInterface $em,
        AlimentRepository $alimentRepo,
        ValidatorInterface $validator
    ): Response {
        $aliments = $alimentRepo->findAllOrderedByName();
        $errors   = [];

        if ($request->isMethod('POST')) {
            $alimentId = $request->request->get('alimentId');
            $aliment   = $alimentId ? $alimentRepo->find($alimentId) : null;

            $consommation->setAliment($aliment);
            $consommation->setTypeRepas($request->request->get('typeRepas', ''));
            $consommation->setPoidsGrammes((int) $request->request->get('poidsGrammes', 0));
            $consommation->setQuantiteEauMl($request->request->get('quantiteEauMl') !== '' ? (int) $request->request->get('quantiteEauMl') : null);

            $violations = $validator->validate($consommation);
            if (count($violations) === 0) {
                $em->flush();
                $this->addFlash('success', 'Repas modifié avec succès !');
                return $this->redirectToRoute('nutrition');
            }

            foreach ($violations as $v) {
                $errors[$v->getPropertyPath()] = $v->getMessage();
            }
        }

        return $this->render('nutrition/consommation_form.html.twig', [
            'consommation' => $consommation,
            'aliments'     => $aliments,
            'errors'       => $errors,
            'mode'         => 'edit',
        ]);
    }

    #[Route('/consommation/{id}/delete', name: 'consommation_delete', methods: ['GET', 'POST'])]
    public function deleteConsommation(
        Consommation $consommation,
        EntityManagerInterface $em
    ): Response {
        $em->remove($consommation);
        $em->flush();
        $this->addFlash('success', 'Repas supprimé du journal.');
        return $this->redirectToRoute('nutrition');
    }
}
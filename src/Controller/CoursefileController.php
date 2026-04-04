<?php

namespace App\Controller;

use App\Entity\Coursefile;
use App\Form\CoursefileType;
use App\Repository\CoursefileRepository;
use App\Service\Domain\CourseDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/coursefile')]
final class CoursefileController extends AbstractController
{
    #[Route(name: 'app_coursefile_index', methods: ['GET'])]
    public function index(CoursefileRepository $coursefileRepository): Response
    {
        return $this->render('coursefile/index.html.twig', [
            'coursefiles' => $coursefileRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_coursefile_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CourseDomainService $domainService): Response
    {
        $coursefile = new Coursefile();
        $form = $this->createForm(CoursefileType::class, $coursefile, ['require_upload' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $up = $form->get('upload')->getData();
                if ($up instanceof UploadedFile) {
                    $domainService->applyUploadedBinary($coursefile, $up);
                }
                $domainService->saveCoursefile($coursefile);
                return $this->redirectToRoute('app_coursefile_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('coursefile/new.html.twig', [
            'coursefile' => $coursefile,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coursefile_show', methods: ['GET'])]
    public function show(Coursefile $coursefile): Response
    {
        return $this->render('coursefile/show.html.twig', [
            'coursefile' => $coursefile,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coursefile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coursefile $coursefile, CourseDomainService $domainService): Response
    {
        $form = $this->createForm(CoursefileType::class, $coursefile, ['require_upload' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $upload = $form->get('upload')->getData();
                if ($upload instanceof UploadedFile) {
                    $domainService->applyUploadedBinary($coursefile, $upload);
                }
                $domainService->saveCoursefile($coursefile);
                return $this->redirectToRoute('app_coursefile_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('coursefile/edit.html.twig', [
            'coursefile' => $coursefile,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coursefile_delete', methods: ['POST'])]
    public function delete(Request $request, Coursefile $coursefile, CourseDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coursefile->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeCoursefile($coursefile);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_coursefile_index', [], Response::HTTP_SEE_OTHER);
    }
}

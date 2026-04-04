<?php

namespace App\Controller;

use App\Entity\SavedCourse;
use App\Form\SavedCourseType;
use App\Repository\SavedCourseRepository;
use App\Service\Domain\CourseDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/saved/course')]
final class SavedCourseController extends AbstractController
{
    #[Route(name: 'app_saved_course_index', methods: ['GET'])]
    public function index(SavedCourseRepository $savedCourseRepository): Response
    {
        return $this->render('saved_course/index.html.twig', [
            'saved_courses' => $savedCourseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_saved_course_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CourseDomainService $domainService): Response
    {
        $savedCourse = new SavedCourse();
        $form = $this->createForm(SavedCourseType::class, $savedCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSavedCourse($savedCourse);
                return $this->redirectToRoute('app_saved_course_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('saved_course/new.html.twig', [
            'saved_course' => $savedCourse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_saved_course_show', methods: ['GET'])]
    public function show(SavedCourse $savedCourse): Response
    {
        return $this->render('saved_course/show.html.twig', [
            'saved_course' => $savedCourse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_saved_course_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SavedCourse $savedCourse, CourseDomainService $domainService): Response
    {
        $form = $this->createForm(SavedCourseType::class, $savedCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSavedCourse($savedCourse);
                return $this->redirectToRoute('app_saved_course_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('saved_course/edit.html.twig', [
            'saved_course' => $savedCourse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_saved_course_delete', methods: ['POST'])]
    public function delete(Request $request, SavedCourse $savedCourse, CourseDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$savedCourse->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeSavedCourse($savedCourse);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_saved_course_index', [], Response::HTTP_SEE_OTHER);
    }
}

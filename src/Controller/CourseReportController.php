<?php

namespace App\Controller;

use App\Entity\CourseReport;
use App\Form\CourseReportType;
use App\Repository\CourseReportRepository;
use App\Service\Domain\CourseDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/course/report')]
final class CourseReportController extends AbstractController
{
    #[Route(name: 'app_course_report_index', methods: ['GET'])]
    public function index(CourseReportRepository $courseReportRepository): Response
    {
        return $this->render('course_report/index.html.twig', [
            'course_reports' => $courseReportRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_course_report_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CourseDomainService $domainService): Response
    {
        $courseReport = new CourseReport();
        $form = $this->createForm(CourseReportType::class, $courseReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveCourseReport($courseReport);
                return $this->redirectToRoute('app_course_report_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('course_report/new.html.twig', [
            'course_report' => $courseReport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_course_report_show', methods: ['GET'])]
    public function show(CourseReport $courseReport): Response
    {
        return $this->render('course_report/show.html.twig', [
            'course_report' => $courseReport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_course_report_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CourseReport $courseReport, CourseDomainService $domainService): Response
    {
        $form = $this->createForm(CourseReportType::class, $courseReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveCourseReport($courseReport);
                return $this->redirectToRoute('app_course_report_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('course_report/edit.html.twig', [
            'course_report' => $courseReport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_course_report_delete', methods: ['POST'])]
    public function delete(Request $request, CourseReport $courseReport, CourseDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$courseReport->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeCourseReport($courseReport);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_course_report_index', [], Response::HTTP_SEE_OTHER);
    }
}

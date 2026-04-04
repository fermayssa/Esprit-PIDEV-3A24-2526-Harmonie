<?php

namespace App\Controller;

use App\Entity\PasswordResetCode;
use App\Form\PasswordResetCodeType;
use App\Repository\PasswordResetCodeRepository;
use App\Service\Domain\AccountDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/password/reset/code')]
final class PasswordResetCodeController extends AbstractController
{
    #[Route(name: 'app_password_reset_code_index', methods: ['GET'])]
    public function index(PasswordResetCodeRepository $passwordResetCodeRepository): Response
    {
        return $this->render('password_reset_code/index.html.twig', [
            'password_reset_codes' => $passwordResetCodeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_password_reset_code_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AccountDomainService $domainService): Response
    {
        $passwordResetCode = new PasswordResetCode();
        $form = $this->createForm(PasswordResetCodeType::class, $passwordResetCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->savePasswordResetCode($passwordResetCode);
                return $this->redirectToRoute('app_password_reset_code_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('password_reset_code/new.html.twig', [
            'password_reset_code' => $passwordResetCode,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_password_reset_code_show', methods: ['GET'])]
    public function show(PasswordResetCode $passwordResetCode): Response
    {
        return $this->render('password_reset_code/show.html.twig', [
            'password_reset_code' => $passwordResetCode,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_password_reset_code_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PasswordResetCode $passwordResetCode, AccountDomainService $domainService): Response
    {
        $form = $this->createForm(PasswordResetCodeType::class, $passwordResetCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->savePasswordResetCode($passwordResetCode);
                return $this->redirectToRoute('app_password_reset_code_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('password_reset_code/edit.html.twig', [
            'password_reset_code' => $passwordResetCode,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_password_reset_code_delete', methods: ['POST'])]
    public function delete(Request $request, PasswordResetCode $passwordResetCode, AccountDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$passwordResetCode->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removePasswordResetCode($passwordResetCode);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_password_reset_code_index', [], Response::HTTP_SEE_OTHER);
    }
}

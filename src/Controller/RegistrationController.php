<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\RegistrationStep2FormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegistrationController extends AbstractController
{
    // ── Étape 1 ───────────────────────────────────────────────────────────────
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $hasher,
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plain          = $form->get('plainPassword')->getData();
            $hashedPassword = $hasher->hashPassword($user, $plain);

            $request->getSession()->set('reg_step1', [
                'nom'           => $user->getUserNom(),
                'prenom'        => $user->getUserPrenom(),
                'email'         => $user->getUserEmail(),
                'password'      => $hashedPassword,
                'dateNaissance' => $user->getUserDateDeNaissance() instanceof \DateTimeInterface
                    ? $user->getUserDateDeNaissance()->format('Y-m-d')
                    : (string) $user->getUserDateDeNaissance(),
            ]);

            return $this->redirectToRoute('app_register_step2');
        }

        return $this->render('registration/register_step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // ── Étape 2 ───────────────────────────────────────────────────────────────
    #[Route('/register/step2', name: 'app_register_step2')]
    public function registerStep2(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
        }

        $session = $request->getSession();
        $step1   = $session->get('reg_step1');

        if (!$step1) {
            return $this->redirectToRoute('app_register');
        }

        // ── Construire l'entité avec les données de l'étape 1 ────────────────
        $user = new User();
        $user->setUserNom($step1['nom']);
        $user->setUserPrenom($step1['prenom']);
        $user->setUserEmail($step1['email']);
        $user->setUserPassword($step1['password']);
        $user->setUserDateDeNaissance($step1['dateNaissance']);
        $user->setDateInscription((new \DateTime())->format('Y-m-d'));
        $user->setTypeUtilisateur('ETUDIANT');
        $user->setIsActive(true);

        $form = $this->createForm(RegistrationStep2FormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ── Upload avatar ─────────────────────────────────────────────────
            $avatarFile = $form->get('avatarFile')->getData();
            if ($avatarFile) {
                $safeFilename = $slugger->slug($step1['nom']);
                $newFilename  = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();
                $uploadDir    = $this->getParameter('kernel.project_dir') . '/public/user_images';

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                try {
                    $avatarFile->move($uploadDir, $newFilename);
                    $user->setUserImagePath('user_images/' . $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', "Erreur upload image : " . $e->getMessage());
                }
            }

            // ── Persist + Flush avec gestion d'erreur complète ───────────────
            try {
                $em->persist($user);
                $em->flush();

                // Succès : nettoyer la session et rediriger
                $session->remove('reg_step1');
                $this->addFlash('success', 'Compte créé avec succès ! Vous pouvez vous connecter.');
                return $this->redirectToRoute('app_login');

            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $session->remove('reg_step1');
                $this->addFlash('error', 'Cet email est déjà utilisé. Veuillez recommencer avec un autre email.');
                return $this->redirectToRoute('app_register');

            } catch (\Doctrine\DBAL\Exception $e) {
                // Erreur DBAL — affiche le message exact pour diagnostic
                $this->addFlash('error', 'Erreur base de données : ' . $e->getMessage());

            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur inattendue : ' . $e->getMessage());
            }
        }

        return $this->render('registration/register_step2.html.twig', [
            'form'  => $form->createView(),
            'step1' => $step1,
        ]);
    }
}

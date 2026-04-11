<?php

namespace App\Controller\Api;

use App\Entity\Tache;
use App\Repository\TacheRepository;
use App\Repository\CalendrierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/tasks')]
final class TaskApiController extends AbstractController
{
    #[Route('', name: 'api_tasks_list', methods: ['GET'])]
    public function list(TacheRepository $tacheRepository): JsonResponse
    {
        $tasks = $tacheRepository->findAll();
        $data = [];
        foreach ($tasks as $task) {
            $data[] = [
                'id' => $task->getId(),
                'title' => $task->getNom(),
                'priority' => $task->getPriorite() ?? 'moyenne',
                'dueDate' => $task->getDeadline() ? $task->getDeadline()->format('Y-m-d') : null,
                'notes' => $task->getNotes(),
                'completed' => $task->getStatutTache() === 'TERMINEE',
                'statut' => $task->getStatutTache(),
            ];
        }
        return $this->json($data);
    }

    #[Route('', name: 'api_tasks_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em, CalendrierRepository $calendrierRepository): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            
            $task = new Tache();
            $task->setNom($data['title'] ?? 'Nouvelle tâche');
            $task->setNotes($data['notes'] ?? null);
            $task->setPriorite($data['priority'] ?? 'moyenne');
            
            if (!empty($data['dueDate'])) {
                $task->setDeadline(new \DateTime($data['dueDate']));
            }
            
            $task->setStatutTache($data['completed'] ? 'TERMINEE' : ($data['statut'] ?? 'A_FAIRE'));
            
            // Assigner au calendrier principal
            if ($cal = $calendrierRepository->findPrimary()) {
                $task->setCalendrier($cal);
            }
            
            $em->persist($task);
            $em->flush();
            
            return $this->json([
                'id' => $task->getId(),
                'title' => $task->getNom(),
                'priority' => $task->getPriorite() ?? 'moyenne',
                'dueDate' => $task->getDeadline() ? $task->getDeadline()->format('Y-m-d') : null,
                'completed' => $task->getStatutTache() === 'TERMINEE',
            ], 201);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    #[Route('/{id}', name: 'api_tasks_update', methods: ['PUT'])]
    public function update(Tache $task, Request $request, EntityManagerInterface $em): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            
            if (isset($data['title'])) {
                $task->setNom($data['title']);
            }
            if (isset($data['notes'])) {
                $task->setNotes($data['notes']);
            }
            if (isset($data['priority'])) {
                $task->setPriorite($data['priority']);
            }
            if (isset($data['dueDate'])) {
                $task->setDeadline(new \DateTime($data['dueDate']));
            }
            if (isset($data['completed'])) {
                $task->setStatutTache($data['completed'] ? 'TERMINEE' : 'A_FAIRE');
            }
            if (isset($data['statut'])) {
                $task->setStatutTache($data['statut']);
            }
            
            $em->flush();
            
            return $this->json([
                'id' => $task->getId(),
                'title' => $task->getNom(),
                'priority' => $task->getPriorite() ?? 'moyenne',
                'dueDate' => $task->getDeadline() ? $task->getDeadline()->format('Y-m-d') : null,
                'completed' => $task->getStatutTache() === 'TERMINEE',
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    #[Route('/{id}', name: 'api_tasks_delete', methods: ['DELETE'])]
    public function delete(Tache $task, EntityManagerInterface $em): JsonResponse
    {
        try {
            $em->remove($task);
            $em->flush();
            return $this->json(null, 204);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }
}

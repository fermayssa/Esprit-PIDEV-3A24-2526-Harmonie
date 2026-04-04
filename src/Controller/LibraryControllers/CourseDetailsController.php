<?php

namespace App\Controller\LibraryControllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;

#[Route('/courses/{id}', name: 'app_courses_detail', requirements: ['id' => '\d+'])]
class CourseDetailsController extends AbstractController
{

    public function __construct(private Connection $db) {}

    private function getMockUserId(): int
    {
        $session = $this->container->get('request_stack')->getSession();
        return (int) ($session->get('mock_user_id') ?? 0);
    }


    // ── MAIN PAGE ──────────────────────────────────────────────────────────────
    #[Route('', name: '', methods: ['GET'])]
    public function index(int $id): Response
    {
        $course = $this->db->fetchAssociative(
            'SELECT c.id, c.title, c.cover_image_path, c.userid, c.is_published,
                    s.name AS subject_name
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE c.id = ?',
            [$id]
        );

        if (!$course) throw $this->createNotFoundException('Course not found.');

        $currentUserId = $this->getMockUserId();
        $isOwner = (int)$course['userid'] === (int)$currentUserId;

        // saved-to-library state (for non-owners)
        $isSaved = false;
        if (!$isOwner && $currentUserId) {
            $isSaved = (bool)$this->db->fetchOne(
                'SELECT 1 FROM saved_courses WHERE userid = ? AND courseid = ?',
                [$currentUserId, $id]
            );
        }

        $files = $this->db->fetchAllAssociative(
            'SELECT id, originalname, mimetype, sizebytes, uploaded_at
             FROM coursefile WHERE courseid = ? ORDER BY id',
            [$id]
        );

        $subjects = $this->db->fetchAllAssociative(
            'SELECT id, name FROM subject ORDER BY name'
        );

        return $this->render('library/course-details.html.twig', [
            'course'    => $course,
            'isOwner'   => $isOwner,
            'isSaved'   => $isSaved,
            'files'     => $files,
            'subjects'  => $subjects,
            'origin'    => 'courses',
        ]);
    }

    // ── RENAME COURSE ─────────────────────────────────────────────────────────
    #[Route('/rename', name: '_rename', methods: ['POST'])]
    public function rename(int $id, Request $req): JsonResponse
    {
        $title = trim((string)$req->request->get('title', ''));
        if ($title === '') return $this->json(['message' => 'Title required'], 400);

        $this->db->executeStatement('UPDATE courses SET title = ? WHERE id = ?', [$title, $id]);
        return $this->json(['ok' => true]);
    }

    // ── CHANGE SUBJECT ────────────────────────────────────────────────────────
    #[Route('/subject', name: '_subject', methods: ['POST'])]
    public function changeSubject(int $id, Request $req): JsonResponse
    {
        $subjectName = trim((string)$req->request->get('subject', ''));
        if ($subjectName === '') return $this->json(['message' => 'Subject required'], 400);

        // get or create subject
        $row = $this->db->fetchAssociative('SELECT id FROM subject WHERE name = ?', [$subjectName]);
        if ($row) {
            $subjectId = $row['id'];
        } else {
            $this->db->executeStatement('INSERT INTO subject (name) VALUES (?)', [$subjectName]);
            $subjectId = $this->db->lastInsertId();
        }

        $this->db->executeStatement('UPDATE courses SET subjectid = ? WHERE id = ?', [$subjectId, $id]);
        return $this->json(['ok' => true]);
    }

    // ── TOGGLE PUBLISH ────────────────────────────────────────────────────────
    #[Route('/publish', name: '_publish', methods: ['POST'])]
    public function publish(int $id, Request $req): JsonResponse
    {
        $published = (int)((bool)$req->request->get('published', false));
        $this->db->executeStatement('UPDATE courses SET is_published = ? WHERE id = ?', [$published, $id]);
        return $this->json(['ok' => true, 'is_published' => $published]);
    }

    // ── UPLOAD FILES ──────────────────────────────────────────────────────────
    #[Route('/upload', name: '_upload', methods: ['POST'])]
    public function upload(int $id, Request $req): JsonResponse
    {
        $files = $req->files->get('files', []);
        if (!is_array($files)) $files = [$files];

        $uploaded = [];
        foreach ($files as $file) {
            if (!$file) continue;
            $bytes = file_get_contents($file->getPathname());
            $this->db->executeStatement(
                'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
                 VALUES (?, ?, ?, ?, ?)',
                [$id, $file->getClientOriginalName(), $file->getMimeType(), strlen($bytes), $bytes],
                [4 => \PDO::PARAM_LOB]
            );
            $uploaded[] = ['id' => $this->db->lastInsertId(), 'name' => $file->getClientOriginalName()];
        }
        return $this->json(['ok' => true, 'uploaded' => $uploaded]);
    }

    // ── CREATE NOTE ───────────────────────────────────────────────────────────
    #[Route('/note', name: '_note', methods: ['POST'])]
    public function createNote(int $id, Request $req): JsonResponse
    {
        $name = trim((string)$req->request->get('name', 'note')) ?: 'note';
        if (!str_ends_with(strtolower($name), '.txt')) $name .= '.txt';

        $content = (string)$req->request->get('content', '');
        $bytes   = strlen($content);

        $this->db->executeStatement(
            'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
             VALUES (?, ?, ?, ?, ?)',
            [$id, $name, 'text/plain', $bytes, $content],
            [4 => \PDO::PARAM_LOB]
        );
        $fileId = $this->db->lastInsertId();
        return $this->json(['ok' => true, 'id' => $fileId, 'name' => $name]);
    }

    // ── SAVE NOTE ─────────────────────────────────────────────────────────────
    #[Route('/note/{fileId}/save', name: '_note_save', requirements: ['fileId' => '\d+'], methods: ['POST'])]
    public function saveNote(int $id, int $fileId, Request $req): JsonResponse
    {
        $content = (string)$req->request->get('content', '');
        $name    = trim((string)$req->request->get('name', '')) ?: null;

        $update  = 'UPDATE coursefile SET filedata = ?, sizebytes = ?';
        $params  = [$content, strlen($content)];

        if ($name !== null) {
            $update .= ', originalname = ?';
            $params[] = $name;
        }
        $update  .= ' WHERE id = ? AND courseid = ?';
        $params[] = $fileId;
        $params[] = $id;

        $this->db->executeStatement($update, $params);
        return $this->json(['ok' => true]);
    }

    // ── RENAME FILE ───────────────────────────────────────────────────────────
    #[Route('/file/{fileId}/rename', name: '_file_rename', requirements: ['fileId' => '\d+'], methods: ['POST'])]
    public function renameFile(int $id, int $fileId, Request $req): JsonResponse
    {
        $name = trim((string)$req->request->get('name', ''));
        if ($name === '') return $this->json(['message' => 'Name required'], 400);

        $this->db->executeStatement(
            'UPDATE coursefile SET originalname = ? WHERE id = ? AND courseid = ?',
            [$name, $fileId, $id]
        );
        return $this->json(['ok' => true]);
    }

    // ── DELETE FILE ───────────────────────────────────────────────────────────
    #[Route('/file/{fileId}/delete', name: '_file_delete', requirements: ['fileId' => '\d+'], methods: ['POST'])]
    public function deleteFile(int $id, int $fileId): JsonResponse
    {
        $this->db->executeStatement(
            'DELETE FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        return $this->json(['ok' => true]);
    }

    // ── DOWNLOAD FILE ─────────────────────────────────────────────────────────
    #[Route('/file/{fileId}/download', name: '_file_download', requirements: ['fileId' => '\d+'], methods: ['GET'])]
    public function downloadFile(int $id, int $fileId): Response
    {
        $row = $this->db->fetchAssociative(
            'SELECT originalname, mimetype, filedata FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        if (!$row) throw $this->createNotFoundException('File not found.');

        $data = is_resource($row['filedata']) ? stream_get_contents($row['filedata']) : $row['filedata'];

        $response = new Response($data);
        $response->headers->set('Content-Type', $row['mimetype'] ?: 'application/octet-stream');
        $response->headers->set('Content-Disposition',
            $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $row['originalname'])
        );
        return $response;
    }

    // ── PREVIEW FILE (inline for browser) ────────────────────────────────────
    #[Route('/file/{fileId}/preview', name: '_file_preview', requirements: ['fileId' => '\d+'], methods: ['GET'])]
    public function previewFile(int $id, int $fileId): Response
    {
        $row = $this->db->fetchAssociative(
            'SELECT originalname, mimetype, filedata FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        if (!$row) throw $this->createNotFoundException('File not found.');

        $data = is_resource($row['filedata']) ? stream_get_contents($row['filedata']) : $row['filedata'];

        $response = new Response($data);
        $response->headers->set('Content-Type', $row['mimetype'] ?: 'application/octet-stream');
        $response->headers->set('Content-Disposition',
            $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $row['originalname'])
        );
        return $response;
    }

    // ── SAVE TO LIBRARY (toggle) ──────────────────────────────────────────────
    #[Route('/save-to-library', name: '_save_library', methods: ['POST'])]
    public function saveToLibrary(int $id): JsonResponse
    {
        $userId = $this->getMockUserId();
        if (!$userId) return $this->json(['message' => 'Not authenticated'], 401);

        $exists = $this->db->fetchOne(
            'SELECT 1 FROM saved_courses WHERE userid = ? AND courseid = ?',
            [$userId, $id]
        );

        if ($exists) {
            $this->db->executeStatement(
                'DELETE FROM saved_courses WHERE userid = ? AND courseid = ?',
                [$userId, $id]
            );
            return $this->json(['ok' => true, 'saved' => false]);
        }

        $this->db->executeStatement(
            'INSERT INTO saved_courses (userid, courseid) VALUES (?, ?)',
            [$userId, $id]
        );
        return $this->json(['ok' => true, 'saved' => true]);
    }
}

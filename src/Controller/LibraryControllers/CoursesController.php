<?php

namespace App\Controller\LibraryControllers;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/courses')]
class CoursesController extends AbstractController
{
    public function __construct(
        private readonly Connection $db,
    ) {}

    // ── GET /courses ───────────────────────────────────────────────────────
    #[Route('', name: 'app_courses', methods: ['GET'])]
    public function index(): Response
    {
        // No auth — show all courses in DB
        $courses = $this->db->fetchAllAssociative(
            "SELECT c.id, c.title, s.name AS subject_name, c.cover_image_path
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             ORDER BY c.id DESC"
        );

        $courses = array_map(fn($r) => [
            'id'             => (int) $r['id'],
            'title'          => $r['title'],
            'subjectName'    => $r['subject_name'],
            'coverImagePath' => $r['cover_image_path'],
            'isSaved'        => false,
        ], $courses);

        $subjects = $this->db->fetchAllAssociative(
            'SELECT id, name FROM subject ORDER BY name ASC'
        );

        return $this->render('library/courses.html.twig', [
            'courses'  => $courses,
            'subjects' => $subjects,
        ]);
    }

    // ── POST /courses/create ───────────────────────────────────────────────
    #[Route('/create', name: 'app_courses_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $title      = trim((string) $request->request->get('title', ''));
        $subjectStr = trim((string) $request->request->get('subject', ''));
        $autoGen    = $request->request->get('autoGen') === '1';

        if ($title === '') {
            return new JsonResponse(['message' => 'Course name is required.'], 422);
        }
        if ($subjectStr === '') {
            return new JsonResponse(['message' => 'Subject is required.'], 422);
        }

        // Resolve or create subject
        $subject = $this->db->fetchAssociative(
            'SELECT id FROM subject WHERE LOWER(name) = LOWER(:name)',
            ['name' => $subjectStr]
        );
        if ($subject) {
            $subjectId = (int) $subject['id'];
        } else {
            $this->db->executeStatement(
                'INSERT INTO subject (name) VALUES (:name)',
                ['name' => $subjectStr]
            );
            $subjectId = (int) $this->db->lastInsertId();
        }

        // Handle cover image
        $coverPath = null;
        $coverFile = $request->files->get('coverImage');

        if ($coverFile) {
            $ext      = $coverFile->getClientOriginalExtension() ?: 'jpg';
            $filename = 'cover_' . time() . '_' . uniqid() . '.' . $ext;
            $coverFile->move('C:/wamp64/www/covers', $filename);
            $coverPath = $filename;
        } elseif ($autoGen) {
            // Auto-generate via HuggingFace FLUX.1-schnell (same API as Java)
            try {
                $apiKey  = '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';
                $apiUrl  = 'https://router.huggingface.co/hf-inference/models/black-forest-labs/FLUX.1-schnell';
                $prompt  = sprintf(
                    'A sleek minimalist course cover icon for an online education platform. '
                    . 'The course is titled "%s" and teaches "%s" as an academic subject. '
                    . 'Interpret "%s" strictly as an educational or technical discipline, not literally. '
                    . 'Flat vector illustration, modern app icon style, subtle gradient, '
                    . 'centered composition, soft geometric shapes, professional edu-tech aesthetic, '
                    . 'vibrant but clean color palette, no text, no letters, no words',
                    $title, $subjectStr, $subjectStr
                );

                $ch = curl_init($apiUrl);
                curl_setopt_array($ch, [
                    CURLOPT_POST           => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT        => 60,
                    CURLOPT_HTTPHEADER     => [
                        'Authorization: Bearer ' . $apiKey,
                        'Content-Type: application/json',
                        'Accept: image/png',
                    ],
                    CURLOPT_POSTFIELDS => json_encode(['inputs' => $prompt]),
                ]);
                $bytes      = curl_exec($ch);
                $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($statusCode === 200 && $bytes) {
                    $dir = 'C:/wamp64/www/covers';
                    if (!is_dir($dir)) mkdir($dir, 0777, true);
                    $filename = 'cover_gen_' . time() . '_' . uniqid() . '.png';
                    file_put_contents($dir . '/' . $filename, $bytes);
                    $coverPath = $filename;
                }
            } catch (\Throwable) {
                // Generation failed — continue without cover
            }
        }

        // Insert course (no userid — no auth yet)
        $this->db->executeStatement(
            'INSERT INTO courses (title, subjectid, cover_image_path) VALUES (:title, :subjectId, :cover)',
            [
                'title'     => $title,
                'subjectId' => $subjectId,
                'cover'     => $coverPath,
            ]
        );
        $courseId = (int) $this->db->lastInsertId();

        // Insert uploaded files as blobs
        $files = $request->files->get('files') ?? [];
        if (!is_array($files)) {
            $files = [$files];
        }
        foreach ($files as $file) {
            if (!$file) continue;
            $data     = file_get_contents($file->getRealPath());
            $mime     = $file->getMimeType() ?? 'application/octet-stream';
            $origName = $file->getClientOriginalName();
            $this->db->executeStatement(
                'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
                 VALUES (:courseId, :name, :mime, :size, :data)',
                [
                    'courseId' => $courseId,
                    'name'     => $origName,
                    'mime'     => $mime,
                    'size'     => strlen($data),
                    'data'     => $data,
                ]
            );
        }

        return new JsonResponse([
            'id'      => $courseId,
            'title'   => $title,
            'message' => 'Course created successfully.',
        ], 201);
    }

    // ── POST /courses/{id}/delete ──────────────────────────────────────────
    #[Route('/{id}/delete', name: 'app_courses_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id): JsonResponse
    {
        $course = $this->db->fetchAssociative(
            'SELECT id FROM courses WHERE id = :id',
            ['id' => $id]
        );

        if (!$course) {
            return new JsonResponse(['message' => 'Course not found.'], 404);
        }

        $this->db->executeStatement('DELETE FROM saved_courses WHERE course_id = :id', ['id' => $id]);
        $this->db->executeStatement('DELETE FROM courses WHERE id = :id',              ['id' => $id]);

        return new JsonResponse(['message' => 'Course deleted.']);
    }

    // ── GET /courses/{id} ─────────────────────────────────────────────────
    #[Route('/{id}', name: 'app_courses_detail', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function detail(int $id): Response
    {
        $course = $this->db->fetchAssociative(
            "SELECT c.id, c.title, s.name AS subject_name, c.cover_image_path
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE c.id = :id",
            ['id' => $id]
        );

        if (!$course) {
            throw $this->createNotFoundException('Course not found.');
        }

        $files = $this->db->fetchAllAssociative(
            'SELECT id, originalname, mimetype, sizebytes, uploaded_at
             FROM coursefile WHERE courseid = :id ORDER BY uploaded_at DESC',
            ['id' => $id]
        );

        return $this->render('library/course-details.html.twig', [
            'course' => $course,
            'files'  => $files,
        ]);
    }
}

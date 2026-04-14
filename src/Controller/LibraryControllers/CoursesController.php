<?php

namespace App\Controller\LibraryControllers;

use App\Service\ImageGenerationService;
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
        private readonly Connection             $db,
        private readonly ImageGenerationService $imageGenerationService,
    ) {}

    private function getMockUserId(): int
    {
        $user = $this->getUser();
        if (!$user) return 0;
        // getIdentifier() returns the value of your user identifier field
        // Since your PK is user_id, fetch it from DB by email/identifier
        $row = $this->db->fetchAssociative(
            'SELECT user_id FROM `user` WHERE user_email = ?',
            [$user->getUserIdentifier()]
        );
        return $row ? (int) $row['user_id'] : 0;
    }

    // ── GET /courses ───────────────────────────────────────────────────────
    #[Route('', name: 'app_courses', methods: ['GET'])]
    public function index(): Response
    {
        $userId = $this->getMockUserId();

        // Courses the user owns
        $ownedRows = $this->db->fetchAllAssociative(
            "SELECT c.id, c.title, s.name AS subject_name, c.cover_image_path, c.is_published
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE c.userid = ?
             ORDER BY c.id DESC",
            [$userId]
        );

        // Courses the user saved from the library (saved_courses uses user_id / course_id)
        $savedRows = $this->db->fetchAllAssociative(
            "SELECT c.id, c.title, s.name AS subject_name, c.cover_image_path, c.is_published
             FROM saved_courses sc
             JOIN courses c ON c.id = sc.course_id
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE sc.user_id = ?
             ORDER BY c.id DESC",
            [$userId]
        );

        // Build courses list: owned first (isSaved=false), then saved (isSaved=true)
        // Skip duplicates in case someone saved their own course
        $ownedIds = array_column($ownedRows, 'id');

        $courses = array_map(fn($r) => [
            'id'             => (int) $r['id'],
            'title'          => $r['title'],
            'subjectName'    => $r['subject_name'],
            'coverImagePath' => $r['cover_image_path'],
            'isPublished'    => (bool) $r['is_published'],
            'isSaved'        => false,
        ], $ownedRows);

        foreach ($savedRows as $r) {
            if (in_array((int) $r['id'], $ownedIds, true)) continue;
            $courses[] = [
                'id'             => (int) $r['id'],
                'title'          => $r['title'],
                'subjectName'    => $r['subject_name'],
                'coverImagePath' => $r['cover_image_path'],
                'isPublished'    => (bool) $r['is_published'],
                'isSaved'        => true,
            ];
        }

        $subjects = $this->db->fetchAllAssociative(
            'SELECT id, name FROM subject ORDER BY name ASC'
        );

        return $this->render('library/courses.html.twig', [
            'courses'       => $courses,
            'subjects'      => $subjects,
            'currentUserId' => $userId,
        ]);
    }

    // ── POST /courses/create ───────────────────────────────────────────────
    #[Route('/create', name: 'app_courses_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $userId = $this->getMockUserId();

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
            $this->db->executeStatement('INSERT INTO subject (name) VALUES (:name)', ['name' => $subjectStr]);
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
            $bytes = $this->imageGenerationService->generateCourseImage($title, $subjectStr);

            if ($bytes) {
                $dir = 'C:/wamp64/www/covers';
                if (!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }
                $filename = 'cover_gen_' . time() . '_' . uniqid() . '.png';
                file_put_contents($dir . '/' . $filename, $bytes);
                $coverPath = $filename;
            }
        }

        // Insert course with userid
        $this->db->executeStatement(
            'INSERT INTO courses (title, subjectid, cover_image_path, userid) VALUES (:title, :subjectId, :cover, :userId)',
            ['title' => $title, 'subjectId' => $subjectId, 'cover' => $coverPath, 'userId' => $userId ?: null]
        );
        $courseId = (int) $this->db->lastInsertId();

        // Insert uploaded files as blobs
        $files = $request->files->get('files') ?? [];
        if (!is_array($files)) $files = [$files];
        foreach ($files as $file) {
            if (!$file) continue;
            $data     = file_get_contents($file->getRealPath());
            $mime     = $file->getMimeType() ?? 'application/octet-stream';
            $origName = $file->getClientOriginalName();
            $this->db->executeStatement(
                'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
                 VALUES (:courseId, :name, :mime, :size, :data)',
                ['courseId' => $courseId, 'name' => $origName, 'mime' => $mime, 'size' => strlen($data), 'data' => $data]
            );
        }

        return new JsonResponse(['id' => $courseId, 'title' => $title, 'message' => 'Course created successfully.'], 201);
    }

    // ── POST /courses/{id}/update ──────────────────────────────────────────
    #[Route('/{id}/update', name: 'app_courses_update', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function update(int $id, Request $request): JsonResponse
    {
        $userId = $this->getMockUserId();

        $course = $this->db->fetchAssociative(
            'SELECT id FROM courses WHERE id = :id AND userid = :userId',
            ['id' => $id, 'userId' => $userId]
        );
        if (!$course) {
            return new JsonResponse(['message' => 'Course not found or access denied.'], 404);
        }

        $title      = trim((string) $request->request->get('title', ''));
        $subjectStr = trim((string) $request->request->get('subject', ''));

        if ($title === '') {
            return new JsonResponse(['message' => 'Title is required.'], 422);
        }

        // Resolve or create subject
        $subjectId = null;
        if ($subjectStr !== '') {
            $subject = $this->db->fetchAssociative(
                'SELECT id FROM subject WHERE LOWER(name) = LOWER(:name)',
                ['name' => $subjectStr]
            );
            if ($subject) {
                $subjectId = (int) $subject['id'];
            } else {
                $this->db->executeStatement('INSERT INTO subject (name) VALUES (:name)', ['name' => $subjectStr]);
                $subjectId = (int) $this->db->lastInsertId();
            }
        }

        $this->db->executeStatement(
            'UPDATE courses SET title = :title, subjectid = :subjectId WHERE id = :id',
            ['title' => $title, 'subjectId' => $subjectId, 'id' => $id]
        );

        return new JsonResponse(['message' => 'Course updated.']);
    }

    // ── POST /courses/{id}/cover ───────────────────────────────────────────
    #[Route('/{id}/cover', name: 'app_courses_cover', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function cover(int $id, Request $request): JsonResponse
    {
        $userId = $this->getMockUserId();

        $course = $this->db->fetchAssociative(
            'SELECT id, title, subjectid FROM courses WHERE id = :id AND userid = :userId',
            ['id' => $id, 'userId' => $userId]
        );
        if (!$course) {
            return new JsonResponse(['message' => 'Course not found or access denied.'], 404);
        }

        $coverPath = null;
        $coverFile = $request->files->get('coverImage');
        $autoGen   = $request->request->get('autoGen') === '1';

        if ($coverFile) {
            $ext      = $coverFile->getClientOriginalExtension() ?: 'jpg';
            $filename = 'cover_' . time() . '_' . uniqid() . '.' . $ext;
            $coverFile->move('C:/wamp64/www/covers', $filename);
            $coverPath = $filename;
        } elseif ($autoGen) {
            // Fetch subject name for the prompt
            $subjectName = '';
            if ($course['subjectid']) {
                $sub = $this->db->fetchAssociative('SELECT name FROM subject WHERE id = :id', ['id' => $course['subjectid']]);
                $subjectName = $sub ? $sub['name'] : '';
            }

            $bytes = $this->imageGenerationService->generateCourseImage($course['title'], $subjectName);
            if ($bytes) {
                $dir = 'C:/wamp64/www/covers';
                if (!is_dir($dir)) mkdir($dir, 0777, true);
                $filename = 'cover_gen_' . time() . '_' . uniqid() . '.png';
                file_put_contents($dir . '/' . $filename, $bytes);
                $coverPath = $filename;
            } else {
                return new JsonResponse(['message' => 'Image generation failed.'], 500);
            }
        } else {
            return new JsonResponse(['message' => 'No image provided.'], 422);
        }

        $this->db->executeStatement(
            'UPDATE courses SET cover_image_path = :cover WHERE id = :id',
            ['cover' => $coverPath, 'id' => $id]
        );

        return new JsonResponse(['message' => 'Cover updated.', 'coverPath' => $coverPath]);
    }

    // ── POST /courses/{id}/publish ─────────────────────────────────────────
    #[Route('/{id}/publish', name: 'app_courses_publish', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function publish(int $id, Request $request): JsonResponse
    {
        $userId = $this->getMockUserId();

        $course = $this->db->fetchAssociative(
            'SELECT id, is_published FROM courses WHERE id = :id AND userid = :userId',
            ['id' => $id, 'userId' => $userId]
        );
        if (!$course) {
            return new JsonResponse(['message' => 'Course not found or access denied.'], 404);
        }

        // Toggle if no explicit value given
        $publish = $request->request->has('published')
            ? ($request->request->get('published') === '1')
            : !(bool) $course['is_published'];

        $this->db->executeStatement(
            'UPDATE courses SET is_published = :val WHERE id = :id',
            ['val' => $publish ? 1 : 0, 'id' => $id]
        );

        return new JsonResponse([
            'message'   => $publish ? 'Course published.' : 'Course unpublished.',
            'published' => $publish,
        ]);
    }

    // ── POST /courses/{id}/delete ──────────────────────────────────────────
    #[Route('/{id}/delete', name: 'app_courses_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id): JsonResponse
    {
        $userId = $this->getMockUserId();

        // Ensure the course belongs to the current user
        $course = $this->db->fetchAssociative(
            'SELECT id FROM courses WHERE id = :id AND userid = :userId',
            ['id' => $id, 'userId' => $userId]
        );

        if (!$course) {
            return new JsonResponse(['message' => 'Course not found or access denied.'], 404);
        }

        // saved_courses uses course_id (confirmed from Java source)
        $this->db->executeStatement('DELETE FROM saved_courses WHERE course_id = :id', ['id' => $id]);
        $this->db->executeStatement('DELETE FROM coursefile WHERE courseid = :id',     ['id' => $id]);
        $this->db->executeStatement('DELETE FROM courses WHERE id = :id',              ['id' => $id]);

        return new JsonResponse(['message' => 'Course deleted.']);
    }
}

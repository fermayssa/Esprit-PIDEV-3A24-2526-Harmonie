<?php

namespace App\Controller\LibraryControllers;

use App\Service\LibraryServices\SuggestionsService;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;

#[Route('/courses/{id}', name: 'app_courses_detail', requirements: ['id' => '\d+'])]
class CourseDetailsController extends AbstractController
{
    public function __construct(
        private Connection         $db,
        private SuggestionsService $suggestionsService,
        private Pdf                $snappy
    ) {}

    private function getCurrentUserId(): ?int
    {
        $user = $this->getUser();

        if (!$user || !method_exists($user, 'getId')) {
            return null;
        }

        $userId = $user->getId();

        return $userId !== null ? (int) $userId : null;
    }

    // ── MAIN PAGE ──────────────────────────────────────────────────────────────
    #[Route('', name: '', methods: ['GET'])]
    public function index(int $id, Request $req): Response
    {
        $course = $this->db->fetchAssociative(
            'SELECT c.id, c.title, c.cover_image_path, c.is_published, c.userid,
                    s.name AS subject_name
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE c.id = ?',
            [$id]
        );

        if (!$course) throw $this->createNotFoundException('Course not found.');

        $currentUserId = $this->getCurrentUserId() ?? 0;
        $isOwner       = (int) $course['userid'] === $currentUserId && $currentUserId > 0;

        $isSaved = false;
        if (!$isOwner && $currentUserId) {
            try {
                $isSaved = (bool) $this->db->fetchOne(
                    'SELECT 1 FROM saved_courses WHERE user_id = ? AND course_id = ?',
                    [$currentUserId, $id]
                );
            } catch (\Throwable) {
                $isSaved = false;
            }
        }

        $files = $this->db->fetchAllAssociative(
            'SELECT id, originalname, mimetype, sizebytes, uploaded_at
             FROM coursefile WHERE courseid = ? ORDER BY id',
            [$id]
        );

        $subjects = $this->db->fetchAllAssociative(
            'SELECT id, name FROM subject ORDER BY name'
        );

        // Read origin from query string so the back button knows where to return.
        // Only allow known values to avoid open-redirect issues.
        $origin = in_array($req->query->get('origin'), ['library', 'courses'], true)
            ? $req->query->get('origin')
            : 'courses';

        return $this->render('library/course-details.html.twig', [
            'course'    => $course,
            'isOwner'   => $isOwner,
            'isSaved'   => $isSaved,
            'files'     => $files,
            'subjects'  => $subjects,
            'origin'    => $origin,
        ]);
    }

    // ── RENAME COURSE ─────────────────────────────────────────────────────────
    #[Route('/rename', name: '_rename', methods: ['POST'])]
    public function rename(int $id, Request $req): JsonResponse
    {
        $title = trim((string) $req->request->get('title', ''));
        if ($title === '') return $this->json(['message' => 'Title required'], 400);

        $this->db->executeStatement('UPDATE courses SET title = ? WHERE id = ?', [$title, $id]);
        return $this->json(['ok' => true]);
    }

    // ── CHANGE SUBJECT ────────────────────────────────────────────────────────
    #[Route('/subject', name: '_subject', methods: ['POST'])]
    public function changeSubject(int $id, Request $req): JsonResponse
    {
        $subjectName = trim((string) $req->request->get('subject', ''));
        if ($subjectName === '') return $this->json(['message' => 'Subject required'], 400);

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
        // Prevent owners from republishing a course that was locked by an admin.
        $locked = (bool) $this->db->fetchOne('SELECT admin_locked FROM courses WHERE id = ?', [$id]);
        if ($locked) {
            return $this->json([
                'message' => 'This course has been unpublished by an administrator and cannot be republished.',
            ], 403);
        }

        $published = (int) ((bool) $req->request->get('published', false));
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
            if ($bytes === false) {
                return $this->json(['message' => 'Failed to read uploaded file'], 500);
            }

            $size = mb_strlen($bytes, '8bit');

            $this->db->executeStatement(
                'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
                 VALUES (?, ?, ?, ?, ?)',
                [$id, $file->getClientOriginalName(), $file->getMimeType(), $size, $bytes],
                [
                    0 => ParameterType::INTEGER,
                    1 => ParameterType::STRING,
                    2 => ParameterType::STRING,
                    3 => ParameterType::INTEGER,
                    4 => ParameterType::LARGE_OBJECT,
                ]
            );

            $uploaded[] = [
                'id'   => (int) $this->db->lastInsertId(),
                'name' => $file->getClientOriginalName(),
                'size' => $size,
            ];
        }

        return $this->json(['ok' => true, 'uploaded' => $uploaded]);
    }

    // ── CREATE NOTE ───────────────────────────────────────────────────────────
    // Creates a new empty note stored as our JSON rich-text format (.rtfx)
    #[Route('/note', name: '_note', methods: ['POST'])]
    public function createNote(int $id, Request $req): JsonResponse
    {
        $name = trim((string) $req->request->get('name', 'note')) ?: 'note';
        // Always store as .rtfx — our web rich-text JSON format
        $name = preg_replace('/\.(txt|rtfx|md)$/i', '', $name) . '.rtfx';

        // Bootstrap an empty rich-text JSON document
        $emptyDoc = json_encode(['paragraphs' => [['text' => '', 'align' => 'left', 'font' => 'Inter', 'size' => 14]]]);
        $size     = mb_strlen($emptyDoc, '8bit');

        $this->db->executeStatement(
            'INSERT INTO coursefile (courseid, originalname, mimetype, sizebytes, filedata)
             VALUES (?, ?, ?, ?, ?)',
            [$id, $name, 'application/json', $size, $emptyDoc],
            [
                0 => ParameterType::INTEGER,
                1 => ParameterType::STRING,
                2 => ParameterType::STRING,
                3 => ParameterType::INTEGER,
                4 => ParameterType::LARGE_OBJECT,
            ]
        );

        $fileId = $this->db->lastInsertId();
        return $this->json(['ok' => true, 'id' => (int) $fileId, 'name' => $name]);
    }

    // ── LOAD NOTE CONTENT ─────────────────────────────────────────────────────
    // Returns note content as our JSON rich-text format.
    // Handles legacy .txt (wraps as plain paragraphs) and binary .rtfx from JavaFX
    // (extracts printable text as graceful fallback).
    #[Route('/note/{fileId}/content', name: '_note_content', requirements: ['fileId' => '\d+'], methods: ['GET'])]
    public function noteContent(int $id, int $fileId): JsonResponse
    {
        $row = $this->db->fetchAssociative(
            'SELECT originalname, mimetype, filedata FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        if (!$row) return $this->json(['message' => 'Not found'], 404);

        $data = is_resource($row['filedata']) ? stream_get_contents($row['filedata']) : $row['filedata'];
        $name = $row['originalname'] ?? '';

        // Already our JSON format — validate and return as-is
        if (str_ends_with(strtolower($name), '.rtfx') || $row['mimetype'] === 'application/json') {
            $decoded = json_decode($data, true);
            if (isset($decoded['paragraphs'])) {
                return $this->json($decoded);
            }
            // Binary JavaFX .rtfx — extract printable text as fallback
            $text = preg_replace('/[^\x20-\x7E\n\r\t]/', '', $data);
            $text = trim($text);
        } else {
            // Plain .txt / .md
            $text = mb_convert_encoding($data, 'UTF-8', 'auto');
        }

        // Convert plain text to our paragraph JSON structure
        $lines = explode("\n", str_replace(["\r\n", "\r"], "\n", $text));
        $paragraphs = array_map(fn($l) => [
            'text'  => $l,
            'align' => 'left',
            'font'  => 'Inter',
            'size'  => 14,
        ], $lines);

        if (empty($paragraphs)) {
            $paragraphs = [['text' => '', 'align' => 'left', 'font' => 'Inter', 'size' => 14]];
        }

        return $this->json(['paragraphs' => $paragraphs]);
    }

    // ── SAVE NOTE ─────────────────────────────────────────────────────────────
    // Accepts our JSON rich-text payload and stores it.
    #[Route('/note/{fileId}/save', name: '_note_save', requirements: ['fileId' => '\d+'], methods: ['POST'])]
    public function saveNote(int $id, int $fileId, Request $req): JsonResponse
    {
        $name    = trim((string) $req->request->get('name', '')) ?: null;
        $content = (string) $req->request->get('content', '');

        // Ensure name uses .rtfx extension
        if ($name !== null) {
            $name = preg_replace('/\.(txt|rtfx|md)$/i', '', $name) . '.rtfx';
        }

        // Validate JSON content
        $decoded = json_decode($content, true);
        if (!isset($decoded['paragraphs'])) {
            // Wrap plain text as paragraph JSON if something went wrong
            $content = json_encode(['paragraphs' => [['text' => $content, 'align' => 'left', 'font' => 'Inter', 'size' => 14]]]);
        }

        $update = 'UPDATE coursefile SET filedata = ?, sizebytes = ?, mimetype = ?';
        $params = [$content, mb_strlen($content, '8bit'), 'application/json'];

        if ($name !== null) {
            $update  .= ', originalname = ?';
            $params[] = $name;
        }
        $update  .= ' WHERE id = ? AND courseid = ?';
        $params[] = $fileId;
        $params[] = $id;

        $this->db->executeStatement($update, $params);
        return $this->json(['ok' => true]);
    }

    // ── EXPORT NOTE AS PDF ────────────────────────────────────────────────────
    // Uses KnpSnappyBundle to render the note as HTML and convert it to PDF.
    #[Route('/note/{fileId}/export-pdf', name: '_note_export_pdf', requirements: ['fileId' => '\d+'], methods: ['GET'])]
    public function exportNotePdf(int $id, int $fileId): Response
    {
        $row = $this->db->fetchAssociative(
            'SELECT originalname, filedata FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        if (!$row) throw $this->createNotFoundException('Note not found.');

        $data = is_resource($row['filedata']) ? stream_get_contents($row['filedata']) : $row['filedata'];
        $doc  = json_decode($data, true);

        // Fallback: wrap plain text as paragraph structure
        if (!isset($doc['paragraphs'])) {
            $lines = explode("\n", str_replace(["\r\n", "\r"], "\n", $data));
            $doc   = ['paragraphs' => array_map(fn($l) => ['text' => $l, 'align' => 'left', 'font' => 'Inter', 'size' => 14], $lines)];
        }

        $baseName = preg_replace('/\.(rtfx|txt|md)$/i', '', $row['originalname'] ?? 'note');

        $html = $this->renderView('library/note-pdf.html.twig', [
            'title'      => $baseName,
            'paragraphs' => $doc['paragraphs'],
        ]);

        return new PdfResponse(
            $this->snappy->getOutputFromHtml($html),
            $baseName . '.pdf'
        );
    }

    // ── RENAME FILE ───────────────────────────────────────────────────────────
    #[Route('/file/{fileId}/rename', name: '_file_rename', requirements: ['fileId' => '\d+'], methods: ['POST'])]
    public function renameFile(int $id, int $fileId, Request $req): JsonResponse
    {
        $name = trim((string) $req->request->get('name', ''));
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

        $mime = $row['mimetype'] ?: 'application/octet-stream';
        if (str_ends_with(strtolower($row['originalname']), '.pdf')) {
            $mime = 'application/pdf';
        }

        $response = new Response($data);
        $response->headers->set('Content-Type', $mime);
        $response->headers->set(
            'Content-Disposition',
            $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $row['originalname'])
        );
        return $response;
    }

    // ── PREVIEW FILE ─────────────────────────────────────────────────────────
    #[Route('/file/{fileId}/preview', name: '_file_preview', requirements: ['fileId' => '\d+'], methods: ['GET'])]
    public function previewFile(int $id, int $fileId): Response
    {
        $row = $this->db->fetchAssociative(
            'SELECT originalname, mimetype, filedata FROM coursefile WHERE id = ? AND courseid = ?',
            [$fileId, $id]
        );
        if (!$row) throw $this->createNotFoundException('File not found.');

        $data = is_resource($row['filedata']) ? stream_get_contents($row['filedata']) : $row['filedata'];

        $mime = $row['mimetype'] ?: 'application/octet-stream';
        if (str_ends_with(strtolower($row['originalname']), '.pdf')) {
            $mime = 'application/pdf';
        }

        $response = new Response($data);
        $response->headers->set('Content-Type', $mime);
        $response->headers->set(
            'Content-Disposition',
            $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $row['originalname'])
        );
        return $response;
    }

    // ── SAVE TO LIBRARY (toggle) ──────────────────────────────────────────────
    #[Route('/save-to-library', name: '_save_library', methods: ['POST'])]
    public function saveToLibrary(int $id): JsonResponse
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) return $this->json(['message' => 'Not authenticated'], 401);

        $exists = $this->db->fetchOne(
            'SELECT 1 FROM saved_courses WHERE user_id = ? AND course_id = ?',
            [$userId, $id]
        );

        if ($exists) {
            $this->db->executeStatement('DELETE FROM saved_courses WHERE user_id = ? AND course_id = ?', [$userId, $id]);
            $this->db->executeStatement('UPDATE courses SET saves = GREATEST(saves - 1, 0) WHERE id = ?', [$id]);
            return $this->json(['ok' => true, 'saved' => false]);
        }

        $this->db->executeStatement('INSERT INTO saved_courses (user_id, course_id) VALUES (?, ?)', [$userId, $id]);
        $this->db->executeStatement('UPDATE courses SET saves = saves + 1 WHERE id = ?', [$id]);
        return $this->json(['ok' => true, 'saved' => true]);
    }

    // ── REPORT COURSE ─────────────────────────────────────────────────────────
    // Inserts a row into course_reports.
    // A user may not report the same course twice (UNIQUE on reporter_id + course_id).
    #[Route('/report', name: '_report', methods: ['POST'])]
    public function reportCourse(int $id, Request $req): JsonResponse
    {
        $reporterId = $this->getCurrentUserId();
        if (!$reporterId) {
            return $this->json(['message' => 'Not authenticated'], 401);
        }

        // Prevent owners from reporting their own course
        $ownerId = $this->db->fetchOne('SELECT userid FROM courses WHERE id = ?', [$id]);
        if ((int) $ownerId === $reporterId) {
            return $this->json(['message' => 'You cannot report your own course.'], 403);
        }

        // Check for duplicate report
        $alreadyReported = $this->db->fetchOne(
            'SELECT 1 FROM course_reports WHERE reporter_id = ? AND course_id = ?',
            [$reporterId, $id]
        );
        if ($alreadyReported) {
            return $this->json(['message' => 'You have already reported this course.'], 409);
        }

        $reason  = trim((string) $req->request->get('reason', ''));
        $details = trim((string) $req->request->get('details', ''));

        if ($reason === '') {
            return $this->json(['message' => 'A reason is required.'], 400);
        }

        $this->db->executeStatement(
            'INSERT INTO course_reports (course_id, reporter_id, reason, details, status, created_at)
             VALUES (?, ?, ?, ?, ?, NOW())',
            [$id, $reporterId, $reason, $details ?: null, 'pending']
        );

        return $this->json(['ok' => true]);
    }

    // ── SUGGESTIONS — Open Library + YouTube ──────────────────────────────────
    #[Route('/suggestions', name: '_suggestions', methods: ['GET'])]
    public function suggestions(int $id): JsonResponse
    {
        $course = $this->db->fetchAssociative(
            'SELECT c.title, s.name AS subject_name
             FROM courses c
             LEFT JOIN subject s ON s.id = c.subjectid
             WHERE c.id = ?',
            [$id]
        );

        if (!$course) return $this->json(['books' => [], 'videos' => []]);

        $query = !empty($course['subject_name'])
            ? $course['subject_name']
            : $course['title'];

        return $this->json([
            'books'  => $this->suggestionsService->fetchBooks($query, 10),
            'videos' => $this->suggestionsService->fetchVideos($query, 10),
        ]);
    }
}

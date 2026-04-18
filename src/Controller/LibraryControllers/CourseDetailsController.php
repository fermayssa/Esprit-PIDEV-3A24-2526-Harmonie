<?php

namespace App\Controller\LibraryControllers;

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
    public function __construct(private Connection $db) {}

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
    // Reads the JSON rich-text, renders each paragraph with alignment,
    // and streams a PDF back to the browser — mirrors exportNoteToPdf() from Java.
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

        // Fallback: wrap plain text
        if (!isset($doc['paragraphs'])) {
            $lines = explode("\n", str_replace(["\r\n", "\r"], "\n", $data));
            $doc   = ['paragraphs' => array_map(fn($l) => ['text' => $l, 'align' => 'left', 'font' => 'Inter', 'size' => 14], $lines)];
        }

        $baseName = preg_replace('/\.(rtfx|txt|md)$/i', '', $row['originalname'] ?? 'note');
        $pdf      = $this->buildPdf($doc['paragraphs'], $baseName);

        $response = new Response($pdf);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set(
            'Content-Disposition',
            $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $baseName . '.pdf')
        );
        return $response;
    }

    // ── PDF BUILDER ───────────────────────────────────────────────────────────
    // Pure-PHP PDF generator — no dependencies needed.
    // Mirrors the Java exportNoteToPdf() paragraph-by-paragraph approach.
    private function buildPdf(array $paragraphs, string $title): string
    {
        // ── PDF constants
        $pageW   = 595.28; // A4 width  in points
        $pageH   = 841.89; // A4 height in points
        $margin  = 50.0;
        $leading = 16.0;   // line height
        $usableW = $pageW - 2 * $margin;
        $fontSize = 12.0;
        $charsPerLine = (int) ($usableW / ($fontSize * 0.5)); // rough estimate

        // ── Build content lines with alignment metadata
        $lines = []; // each: ['text' => '', 'align' => 'left']
        foreach ($paragraphs as $para) {
            $text  = $para['text']  ?? '';
            $align = $para['align'] ?? 'left';
            // Word-wrap
            $wrapped = $this->wordWrap($text, $charsPerLine);
            if (empty($wrapped)) $wrapped = [''];
            foreach ($wrapped as $line) {
                $lines[] = ['text' => $line, 'align' => $align];
            }
        }

        // ── Partition into pages
        $yStart       = $pageH - $margin;
        $yMin         = $margin + $leading;
        $linesPerPage = (int) (($yStart - $yMin) / $leading);
        $pages        = array_chunk($lines, max(1, $linesPerPage));
        if (empty($pages)) $pages = [[]];

        // ── Assemble raw PDF
        $objects  = [];
        $offsets  = [];
        $objCount = 0;

        $addObj = function (string $content) use (&$objects, &$objCount): int {
            $objCount++;
            $objects[$objCount] = $content;
            return $objCount;
        };

        // Object 1: catalog (filled in after we know page tree id)
        // Object 2: page tree (filled after pages)
        // Object 3: font
        $fontId = $addObj("<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>");

        // Build page content streams
        $pageIds    = [];
        $contentIds = [];

        foreach ($pages as $pageLines) {
            $stream  = "BT\n";
            $stream .= "/F1 {$fontSize} Tf\n";
            $y       = $yStart - $leading;

            foreach ($pageLines as $lineData) {
                $text  = $lineData['text'];
                $align = $lineData['align'] ?? 'left';

                // Sanitize: keep only latin-1 printable chars
                $text = preg_replace('/[^\x20-\x7E]/', ' ', $text);
                $text = str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $text);

                // Approximate text width for alignment
                $textW = strlen($lineData['text']) * $fontSize * 0.5;
                $x     = $margin;
                if ($align === 'center') {
                    $x = $margin + max(0, ($usableW - $textW) / 2);
                } elseif ($align === 'right') {
                    $x = $margin + max(0, $usableW - $textW);
                }

                $stream .= sprintf("%.2f %.2f Td\n", $x - $margin, $y - ($yStart - $leading));
                // Reset to absolute position using Tm (text matrix)
                $stream  = "BT\n/F1 {$fontSize} Tf\n"; // rebuild per line for position control
                // Use a simpler approach: one BT/ET per line
                break; // rebuild below
            }

            // Rebuild with proper per-line positioning
            $stream = "";
            $y      = $yStart - $leading;
            foreach ($pageLines as $lineData) {
                $text  = $lineData['text'];
                $align = $lineData['align'] ?? 'left';
                $text  = preg_replace('/[^\x20-\x7E]/', ' ', $text);
                $text  = str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $text);

                $textW = strlen($lineData['text']) * $fontSize * 0.5;
                $x     = $margin;
                if ($align === 'center') $x = $margin + max(0.0, ($usableW - $textW) / 2.0);
                elseif ($align === 'right') $x = $margin + max(0.0, $usableW - $textW);

                $stream .= sprintf(
                    "BT /F1 %.1f Tf %.2f %.2f Td (%s) Tj ET\n",
                    $fontSize,
                    $x,
                    $y,
                    $text
                );
                $y -= $leading;
            }

            $streamLen    = strlen($stream);
            $contentId    = $addObj("<< /Length {$streamLen} >>\nstream\n{$stream}\nendstream");
            $contentIds[] = $contentId;

            $pageId    = $addObj(''); // placeholder, filled after we know page tree id
            $pageIds[] = $pageId;
        }

        // Object: page tree
        $pageTreeId = $addObj(''); // placeholder
        $kidRefs    = implode(' ', array_map(fn($pid) => "{$pid} 0 R", $pageIds));

        // Fill page objects now we know pageTreeId
        foreach ($pageIds as $i => $pageId) {
            $contentId = $contentIds[$i];
            $objects[$pageId] = "<< /Type /Page /Parent {$pageTreeId} 0 R "
                . "/MediaBox [0 0 {$pageW} {$pageH}] "
                . "/Resources << /Font << /F1 {$fontId} 0 R >> >> "
                . "/Contents {$contentId} 0 R >>";
        }

        $pageCount = count($pageIds);
        $objects[$pageTreeId] = "<< /Type /Pages /Kids [{$kidRefs}] /Count {$pageCount} >>";

        // Catalog
        $catalogId = $addObj("<< /Type /Catalog /Pages {$pageTreeId} 0 R >>");

        // ── Serialize
        $body    = "%PDF-1.4\n";
        $offsets = [];
        for ($i = 1; $i <= $objCount; $i++) {
            $offsets[$i] = strlen($body);
            $body .= "{$i} 0 obj\n{$objects[$i]}\nendobj\n";
        }

        // xref
        $xrefOffset = strlen($body);
        $body .= "xref\n0 " . ($objCount + 1) . "\n";
        $body .= "0000000000 65535 f \n";
        for ($i = 1; $i <= $objCount; $i++) {
            $body .= sprintf("%010d 00000 n \n", $offsets[$i]);
        }

        $body .= "trailer\n<< /Size " . ($objCount + 1) . " /Root {$catalogId} 0 R >>\n";
        $body .= "startxref\n{$xrefOffset}\n%%EOF";

        return $body;
    }

    // ── WORD WRAP ─────────────────────────────────────────────────────────────
    private function wordWrap(string $text, int $maxChars): array
    {
        if ($text === '') return [''];
        $words   = explode(' ', $text);
        $lines   = [];
        $current = '';
        foreach ($words as $word) {
            $test = $current === '' ? $word : $current . ' ' . $word;
            if (strlen($test) > $maxChars && $current !== '') {
                $lines[] = $current;
                $current = $word;
            } else {
                $current = $test;
            }
        }
        if ($current !== '') $lines[] = $current;
        return $lines ?: [''];
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
}

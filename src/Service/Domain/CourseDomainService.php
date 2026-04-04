<?php

namespace App\Service\Domain;

use App\Entity\CourseReport;
use App\Entity\Coursefile;
use App\Entity\Courses;
use App\Entity\SavedCourse;
use App\Entity\Subject;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class CourseDomainService
{
    use PersistenceHelper;

    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator,
    ) {
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    protected function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }

    public function saveSubject(Subject $subject): void
    {
        $this->validateEntity($subject);
        $this->persistAndFlush($subject);
    }

    public function saveCourses(Courses $courses): void
    {
        if ($courses->getSaves() < 0) {
            throw new \DomainException('Le compteur saves ne peut pas être négatif.');
        }
        $this->validateEntity($courses);
        $this->persistAndFlush($courses);
    }

    public function applyUploadedBinary(Coursefile $coursefile, UploadedFile $file): void
    {
        $raw = @file_get_contents($file->getPathname());
        if (false === $raw) {
            throw new \DomainException('Impossible de lire le fichier.');
        }
        $coursefile->setFiledata($raw);
        $coursefile->setMimetype($file->getMimeType() ?? 'application/octet-stream');
        $coursefile->setSizebytes((string) $file->getSize());
        $coursefile->setOriginalname($file->getClientOriginalName());
        $coursefile->setUploadedAt(new \DateTimeImmutable());
    }

    public function saveCoursefile(Coursefile $coursefile): void
    {
        $this->validateEntity($coursefile);
        $this->persistAndFlush($coursefile);
    }

    public function saveSavedCourse(SavedCourse $savedCourse): void
    {
        $this->validateEntity($savedCourse);
        $this->persistAndFlush($savedCourse);
    }

    public function saveCourseReport(CourseReport $courseReport): void
    {
        $allowed = ['pending', 'reviewed', 'dismissed'];
        if (!\in_array($courseReport->getStatus(), $allowed, true)) {
            throw new \DomainException('Statut de signalement invalide.');
        }
        $this->validateEntity($courseReport);
        $this->persistAndFlush($courseReport);
    }

    public function removeSubject(Subject $subject): void
    {
        $this->removeAndFlush($subject);
    }

    public function removeCourses(Courses $courses): void
    {
        $this->removeAndFlush($courses);
    }

    public function removeCoursefile(Coursefile $coursefile): void
    {
        $this->removeAndFlush($coursefile);
    }

    public function removeSavedCourse(SavedCourse $savedCourse): void
    {
        $this->removeAndFlush($savedCourse);
    }

    public function removeCourseReport(CourseReport $courseReport): void
    {
        $this->removeAndFlush($courseReport);
    }
}

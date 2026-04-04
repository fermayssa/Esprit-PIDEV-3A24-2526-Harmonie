<?php

namespace App\Entity;

use App\Repository\SavedCourseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SavedCourseRepository::class)]
#[ORM\Table(name: 'saved_courses')]
#[ORM\UniqueConstraint(name: 'uq_user_course', columns: ['user_id', 'course_id'])]
class SavedCourse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** @see MyISAM table: no FK in DB; use IDs only */
    #[ORM\Column(name: 'user_id')]
    private int $userId;

    #[ORM\Column(name: 'course_id')]
    private int $courseId;

    #[ORM\Column(name: 'saved_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $savedAt = null;

    public function __construct()
    {
        $this->savedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCourseId(): int
    {
        return $this->courseId;
    }

    public function setCourseId(int $courseId): static
    {
        $this->courseId = $courseId;

        return $this;
    }

    public function getSavedAt(): ?\DateTimeInterface
    {
        return $this->savedAt;
    }

    public function setSavedAt(?\DateTimeInterface $savedAt): static
    {
        $this->savedAt = $savedAt;

        return $this;
    }
}

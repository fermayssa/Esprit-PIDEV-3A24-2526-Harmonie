<?php

namespace App\Entity;

use App\Repository\CoursefileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursefileRepository::class)]
#[ORM\Table(name: 'coursefile')]
class Coursefile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'coursefiles')]
    #[ORM\JoinColumn(name: 'courseid', referencedColumnName: 'id', nullable: false)]
    private ?Courses $course = null;

    #[ORM\Column(length: 255)]
    private string $originalname;

    #[ORM\Column(length: 120)]
    private string $mimetype;

    #[ORM\Column(type: Types::BIGINT)]
    private string $sizebytes;

    #[ORM\Column(type: Types::BLOB)]
    private $filedata;

    #[ORM\Column(name: 'uploaded_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $uploadedAt;

    public function __construct()
    {
        $this->uploadedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCourse(): ?Courses
    {
        return $this->course;
    }

    public function setCourse(?Courses $course): static
    {
        $this->course = $course;

        return $this;
    }

    public function getOriginalname(): string
    {
        return $this->originalname;
    }

    public function setOriginalname(string $originalname): static
    {
        $this->originalname = $originalname;

        return $this;
    }

    public function getMimetype(): string
    {
        return $this->mimetype;
    }

    public function setMimetype(string $mimetype): static
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    public function getSizebytes(): string
    {
        return $this->sizebytes;
    }

    public function setSizebytes(string $sizebytes): static
    {
        $this->sizebytes = $sizebytes;

        return $this;
    }

    /** @return resource|string|null */
    public function getFiledata()
    {
        return $this->filedata;
    }

    /** @param resource|string $filedata */
    public function setFiledata($filedata): static
    {
        $this->filedata = $filedata;

        return $this;
    }

    public function getUploadedAt(): \DateTimeInterface
    {
        return $this->uploadedAt;
    }

    public function setUploadedAt(\DateTimeInterface $uploadedAt): static
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }
}

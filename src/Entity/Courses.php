<?php

namespace App\Entity;

use App\Repository\CoursesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursesRepository::class)]
#[ORM\Table(name: 'courses')]
class Courses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $title;

    #[ORM\ManyToOne(inversedBy: 'courses')]
    #[ORM\JoinColumn(name: 'subjectid', referencedColumnName: 'id', nullable: true)]
    private ?Subject $subject = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'userid', referencedColumnName: 'user_id', nullable: true)]
    private ?User $user = null;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(name: 'is_published')]
    private bool $isPublished = false;

    #[ORM\Column(name: 'cover_image_path', length: 500, nullable: true)]
    private ?string $coverImagePath = null;

    #[ORM\Column]
    private int $saves = 0;

    /** @var Collection<int, Coursefile> */
    #[ORM\OneToMany(targetEntity: Coursefile::class, mappedBy: 'course')]
    private Collection $coursefiles;

    public function __construct()
    {
        $this->coursefiles = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function isPublished(): bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): static
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getCoverImagePath(): ?string
    {
        return $this->coverImagePath;
    }

    public function setCoverImagePath(?string $coverImagePath): static
    {
        $this->coverImagePath = $coverImagePath;

        return $this;
    }

    public function getSaves(): int
    {
        return $this->saves;
    }

    public function setSaves(int $saves): static
    {
        $this->saves = $saves;

        return $this;
    }

    /** @return Collection<int, Coursefile> */
    public function getCoursefiles(): Collection
    {
        return $this->coursefiles;
    }

    public function __toString(): string
    {
        return $this->title;
    }
}

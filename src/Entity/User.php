<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\UniqueConstraint(name: 'user_email', columns: ['user_email'])]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'user_id')]
    private ?int $userId = null;

    #[Assert\NotBlank]
    #[Assert\Length(max: 50)]
    #[ORM\Column(name: 'user_nom', length: 50)]
    private string $userNom;

    #[Assert\NotBlank]
    #[Assert\Length(max: 50)]
    #[ORM\Column(name: 'user_prenom', length: 50)]
    private string $userPrenom;

    #[Assert\NotBlank]
    #[Assert\Email]
    #[Assert\Length(max: 100)]
    #[ORM\Column(name: 'user_email', length: 100)]
    private string $userEmail;

    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    #[ORM\Column(name: 'user_password', length: 255)]
    private string $userPassword;

    #[Assert\NotBlank]
    #[Assert\Length(max: 10)]
    #[ORM\Column(name: 'user_date_de_naissance', length: 10)]
    private string $userDateDeNaissance;

    #[ORM\Column(name: 'user_sexe', length: 10, nullable: true)]
    private ?string $userSexe = null;

    #[ORM\Column(name: 'user_poids', type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private ?string $userPoids = null;

    #[ORM\Column(name: 'user_taille', nullable: true)]
    private ?int $userTaille = null;

    #[ORM\Column(name: 'user_niveau_activite_physique', length: 20, nullable: true)]
    private ?string $userNiveauActivitePhysique = null;

    #[ORM\Column(name: 'user_niveau_scolaire', length: 15, nullable: true)]
    private ?string $userNiveauScolaire = null;

    #[ORM\Column(name: 'user_etablissement_scolaire', length: 255, nullable: true)]
    private ?string $userEtablissementScolaire = null;

    #[Assert\NotBlank]
    #[Assert\Length(max: 10)]
    #[ORM\Column(name: 'date_inscription', length: 10)]
    private string $dateInscription;

    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['ETUDIANT', 'ADMIN'])]
    #[ORM\Column(name: 'type_utilisateur', length: 10)]
    private string $typeUtilisateur = 'ETUDIANT';

    #[ORM\Column(name: 'is_active')]
    private bool $isActive = true;

    #[ORM\Column(name: 'user_image_path', length: 255, nullable: true)]
    private ?string $userImagePath = null;

    #[ORM\Column(name: 'face_image_path', length: 500, nullable: true)]
    private ?string $faceImagePath = null;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUserNom(): string
    {
        return $this->userNom;
    }

    public function setUserNom(string $userNom): static
    {
        $this->userNom = $userNom;

        return $this;
    }

    public function getUserPrenom(): string
    {
        return $this->userPrenom;
    }

    public function setUserPrenom(string $userPrenom): static
    {
        $this->userPrenom = $userPrenom;

        return $this;
    }

    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): static
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserPassword(): string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): static
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserDateDeNaissance(): string
    {
        return $this->userDateDeNaissance;
    }

    public function setUserDateDeNaissance(string $userDateDeNaissance): static
    {
        $this->userDateDeNaissance = $userDateDeNaissance;

        return $this;
    }

    public function getUserSexe(): ?string
    {
        return $this->userSexe;
    }

    public function setUserSexe(?string $userSexe): static
    {
        $this->userSexe = $userSexe;

        return $this;
    }

    public function getUserPoids(): ?string
    {
        return $this->userPoids;
    }

    public function setUserPoids(?string $userPoids): static
    {
        $this->userPoids = $userPoids;

        return $this;
    }

    public function getUserTaille(): ?int
    {
        return $this->userTaille;
    }

    public function setUserTaille(?int $userTaille): static
    {
        $this->userTaille = $userTaille;

        return $this;
    }

    public function getUserNiveauActivitePhysique(): ?string
    {
        return $this->userNiveauActivitePhysique;
    }

    public function setUserNiveauActivitePhysique(?string $userNiveauActivitePhysique): static
    {
        $this->userNiveauActivitePhysique = $userNiveauActivitePhysique;

        return $this;
    }

    public function getUserNiveauScolaire(): ?string
    {
        return $this->userNiveauScolaire;
    }

    public function setUserNiveauScolaire(?string $userNiveauScolaire): static
    {
        $this->userNiveauScolaire = $userNiveauScolaire;

        return $this;
    }

    public function getUserEtablissementScolaire(): ?string
    {
        return $this->userEtablissementScolaire;
    }

    public function setUserEtablissementScolaire(?string $userEtablissementScolaire): static
    {
        $this->userEtablissementScolaire = $userEtablissementScolaire;

        return $this;
    }

    public function getDateInscription(): string
    {
        return $this->dateInscription;
    }

    public function setDateInscription(string $dateInscription): static
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getTypeUtilisateur(): string
    {
        return $this->typeUtilisateur;
    }

    public function setTypeUtilisateur(string $typeUtilisateur): static
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getUserImagePath(): ?string
    {
        return $this->userImagePath;
    }

    public function setUserImagePath(?string $userImagePath): static
    {
        $this->userImagePath = $userImagePath;

        return $this;
    }

    public function getFaceImagePath(): ?string
    {
        return $this->faceImagePath;
    }

    public function setFaceImagePath(?string $faceImagePath): static
    {
        $this->faceImagePath = $faceImagePath;

        return $this;
    }

    public function __toString(): string
    {
        return $this->userPrenom.' '.$this->userNom;
    }
}

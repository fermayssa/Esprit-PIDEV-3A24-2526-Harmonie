<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
#[ORM\Table(name: 'tache')]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $nom = '';

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deadline = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $priorite = null;

    #[ORM\Column(name: 'github_issue_number', nullable: true)]
    private ?int $githubIssueNumber = null;

    #[ORM\Column(name: 'github_repo', length: 190, nullable: true)]
    private ?string $githubRepo = null;

    #[ORM\Column(name: 'statut_tache', length: 20, options: ['default' => 'A_FAIRE'])]
    private string $statutTache = 'A_FAIRE';

    #[ORM\ManyToOne(inversedBy: 'taches')]
    #[ORM\JoinColumn(name: 'calendrier_id', referencedColumnName: 'id', nullable: false)]
    private ?Calendrier $calendrier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        return $this->deadline;
    }

    public function setDeadline(?\DateTimeInterface $deadline): static
    {
        $this->deadline = $deadline;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(?string $priorite): static
    {
        $this->priorite = $priorite;

        return $this;
    }

    public function getGithubIssueNumber(): ?int
    {
        return $this->githubIssueNumber;
    }

    public function setGithubIssueNumber(?int $githubIssueNumber): static
    {
        $this->githubIssueNumber = $githubIssueNumber;

        return $this;
    }

    public function getGithubRepo(): ?string
    {
        return $this->githubRepo;
    }

    public function setGithubRepo(?string $githubRepo): static
    {
        $this->githubRepo = $githubRepo;

        return $this;
    }

    public function getStatutTache(): string
    {
        return $this->statutTache;
    }

    public function setStatutTache(string $statutTache): static
    {
        $this->statutTache = $statutTache;

        return $this;
    }

    public function getCalendrier(): ?Calendrier
    {
        return $this->calendrier;
    }

    public function setCalendrier(?Calendrier $calendrier): static
    {
        $this->calendrier = $calendrier;

        return $this;
    }
}<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260405183816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create meditation module tables';
    }

    public function up(Schema $schema): void
    {
        // Drop existing tables if they exist (from JavaFX) to recreate properly
        $this->addSql('SET FOREIGN_KEY_CHECKS = 0');
        $this->addSql('DROP TABLE IF EXISTS conseil');
        $this->addSql('DROP TABLE IF EXISTS journal_humeur');
        $this->addSql('DROP TABLE IF EXISTS session_meditation');
        $this->addSql('SET FOREIGN_KEY_CHECKS = 1');

        // Create tables with proper structure
        $this->addSql('CREATE TABLE session_meditation (
            id INT AUTO_INCREMENT NOT NULL,
            user_id INT NOT NULL,
            auteur VARCHAR(255) NOT NULL,
            duree INT NOT NULL,
            theme VARCHAR(255) NOT NULL,
            audio_url VARCHAR(500) DEFAULT NULL,
            INDEX IDX_A4AB6208A76ED395 (user_id),
            PRIMARY KEY(id),
            CONSTRAINT FK_A4AB6208A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (user_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE conseil (
            id INT AUTO_INCREMENT NOT NULL,
            session_id INT NOT NULL,
            contenu LONGTEXT NOT NULL,
            INDEX IDX_3F3F0681613FECDF (session_id),
            PRIMARY KEY(id),
            CONSTRAINT FK_3F3F0681613FECDF FOREIGN KEY (session_id) REFERENCES session_meditation (id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE journal_humeur (
            id INT AUTO_INCREMENT NOT NULL,
            user_id INT NOT NULL,
            date_journal DATE NOT NULL,
            humeur VARCHAR(50) NOT NULL,
            score INT NOT NULL,
            contenu LONGTEXT NOT NULL,
            INDEX IDX_D41CEA78A76ED395 (user_id),
            PRIMARY KEY(id),
            CONSTRAINT FK_D41CEA78A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (user_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS = 0');
        $this->addSql('DROP TABLE IF EXISTS conseil');
        $this->addSql('DROP TABLE IF EXISTS journal_humeur');
        $this->addSql('DROP TABLE IF EXISTS session_meditation');
        $this->addSql('SET FOREIGN_KEY_CHECKS = 1');
    }
}

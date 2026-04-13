<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260413090000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout colonnes GitHub sur tache';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE tache ADD github_issue_number INT DEFAULT NULL, ADD github_repo VARCHAR(190) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE tache DROP github_issue_number, DROP github_repo');
    }
}

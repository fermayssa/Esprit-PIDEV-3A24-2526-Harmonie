<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260411190000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute la colonne priorite à la table tache';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE tache ADD priorite VARCHAR(20) DEFAULT NULL");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("ALTER TABLE tache DROP priorite");
    }
}

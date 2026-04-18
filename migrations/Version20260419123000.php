<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260419123000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout reminder_minutes sur evenement';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement ADD reminder_minutes INT NOT NULL DEFAULT 15');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement DROP reminder_minutes');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * L'import SQL `integration-pi2.sql` définit déjà les tables.
 * Cette migration sert de point de départ versionné sans modifier le schéma
 * (évite les ALTER/RENAME INDEX incompatibles avec certaines versions MariaDB).
 */
final class Version20260403230305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Baseline après import SQL — aucune modification de schéma.';
    }

    public function up(Schema $schema): void
    {
    }

    public function down(Schema $schema): void
    {
    }
}

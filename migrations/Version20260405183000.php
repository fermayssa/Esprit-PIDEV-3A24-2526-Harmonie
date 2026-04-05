<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Un seul enregistrement calendrier : rattache tâches / événements au calendrier principal puis supprime les doublons.
 */
final class Version20260405183000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Fusion des calendriers multiples vers le calendrier principal (MIN id).';
    }

    public function up(Schema $schema): void
    {
        $count = (int) ($this->connection->fetchOne('SELECT COUNT(*) FROM calendrier') ?: 0);
        if ($count <= 1) {
            return;
        }

        $primary = (int) $this->connection->fetchOne('SELECT MIN(id) FROM calendrier');

        $this->addSql('UPDATE tache SET calendrier_id = '.$primary);
        $this->addSql('UPDATE evenement SET calendrier_id = '.$primary.' WHERE calendrier_id IS NOT NULL');
        $this->addSql('DELETE FROM calendrier WHERE id <> '.$primary);
    }

    public function down(Schema $schema): void
    {
        $this->throwIrreversibleMigrationException();
    }
}

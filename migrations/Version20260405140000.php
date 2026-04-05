<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260405140000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Événement : event_type, lieu_type, lieu_adresse, proprietaire ; table demande_reservation.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement ADD event_type VARCHAR(20) DEFAULT NULL, ADD lieu_type VARCHAR(20) DEFAULT NULL, ADD lieu_adresse VARCHAR(255) DEFAULT NULL, ADD proprietaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_EVENEMENT_PROPRIETAIRE FOREIGN KEY (proprietaire_id) REFERENCES `user` (user_id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_EVENEMENT_PROPRIETAIRE ON evenement (proprietaire_id)');

        $this->addSql('CREATE TABLE demande_reservation (
            id INT AUTO_INCREMENT NOT NULL,
            evenement_id INT NOT NULL,
            salle_id INT NOT NULL,
            utilisateur_id INT NOT NULL,
            statut VARCHAR(20) NOT NULL,
            date_demande DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            commentaire_admin VARCHAR(500) DEFAULT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE INDEX IDX_DEMANDE_STATUT ON demande_reservation (statut)');
        $this->addSql('ALTER TABLE demande_reservation ADD CONSTRAINT FK_DEMANDE_EVENEMENT FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_reservation ADD CONSTRAINT FK_DEMANDE_SALLE FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_reservation ADD CONSTRAINT FK_DEMANDE_USER FOREIGN KEY (utilisateur_id) REFERENCES `user` (user_id) ON DELETE CASCADE');

        $this->addSql('UPDATE evenement SET lieu_adresse = lieu WHERE lieu_adresse IS NULL AND lieu IS NOT NULL AND lieu NOT LIKE \'En ligne\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE demande_reservation DROP FOREIGN KEY FK_DEMANDE_USER');
        $this->addSql('ALTER TABLE demande_reservation DROP FOREIGN KEY FK_DEMANDE_SALLE');
        $this->addSql('ALTER TABLE demande_reservation DROP FOREIGN KEY FK_DEMANDE_EVENEMENT');
        $this->addSql('DROP TABLE demande_reservation');

        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_EVENEMENT_PROPRIETAIRE');
        $this->addSql('DROP INDEX IDX_EVENEMENT_PROPRIETAIRE ON evenement');
        $this->addSql('ALTER TABLE evenement DROP event_type, DROP lieu_type, DROP lieu_adresse, DROP proprietaire_id');
    }
}

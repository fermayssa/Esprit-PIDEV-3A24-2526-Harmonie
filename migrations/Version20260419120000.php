<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260419120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout reminder_sent sur evenement + telegram_chat_id sur user';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement ADD reminder_sent TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE `user` ADD telegram_chat_id VARCHAR(64) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement DROP reminder_sent');
        $this->addSql('ALTER TABLE `user` DROP telegram_chat_id');
    }
}

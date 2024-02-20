<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215183058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant ADD fullname VARCHAR(255) NOT NULL, ADD evenements_id INT NOT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1163C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_D79F6B1163C02CD4 ON participant (evenements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1163C02CD4');
        $this->addSql('DROP INDEX IDX_D79F6B1163C02CD4 ON participant');
        $this->addSql('ALTER TABLE participant DROP fullname, DROP evenements_id');
    }
}

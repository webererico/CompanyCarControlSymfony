<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200928165806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car ADD fk_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D78B2BEB1 FOREIGN KEY (fk_client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_773DE69D78B2BEB1 ON car (fk_client_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D78B2BEB1');
        $this->addSql('DROP INDEX IDX_773DE69D78B2BEB1 ON car');
        $this->addSql('ALTER TABLE car DROP fk_client_id');
    }
}

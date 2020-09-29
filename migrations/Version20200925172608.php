<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925172608 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD fk_adress_id INT DEFAULT NULL, ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455E5DF2E3C FOREIGN KEY (fk_adress_id) REFERENCES adress (id)');
        $this->addSql('CREATE INDEX IDX_C7440455E5DF2E3C ON client (fk_adress_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455E5DF2E3C');
        $this->addSql('DROP INDEX IDX_C7440455E5DF2E3C ON client');
        $this->addSql('ALTER TABLE client DROP fk_adress_id, DROP email');
    }
}

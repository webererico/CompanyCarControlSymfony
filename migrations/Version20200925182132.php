<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925182132 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adress ADD fk_city_id INT DEFAULT NULL, DROP city');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BE7B835F83 FOREIGN KEY (fk_city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_5CECC7BE7B835F83 ON adress (fk_city_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BE7B835F83');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP INDEX IDX_5CECC7BE7B835F83 ON adress');
        $this->addSql('ALTER TABLE adress ADD city VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP fk_city_id');
    }
}

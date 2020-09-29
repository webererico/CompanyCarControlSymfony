<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925180705 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car ADD fk_brand_id INT DEFAULT NULL, ADD fk_color_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D76DD93D6 FOREIGN KEY (fk_brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D48F25C6B FOREIGN KEY (fk_color_id) REFERENCES color (id)');
        $this->addSql('CREATE INDEX IDX_773DE69D76DD93D6 ON car (fk_brand_id)');
        $this->addSql('CREATE INDEX IDX_773DE69D48F25C6B ON car (fk_color_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D76DD93D6');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D48F25C6B');
        $this->addSql('DROP INDEX IDX_773DE69D76DD93D6 ON car');
        $this->addSql('DROP INDEX IDX_773DE69D48F25C6B ON car');
        $this->addSql('ALTER TABLE car DROP fk_brand_id, DROP fk_color_id');
    }
}

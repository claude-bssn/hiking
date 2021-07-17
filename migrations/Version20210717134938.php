<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210717134938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hike (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, duration INT NOT NULL, distance INT NOT NULL, hight INT NOT NULL, highest VARCHAR(255) NOT NULL, lowest INT NOT NULL, difficulty VARCHAR(255) NOT NULL, to_start TINYINT(1) NOT NULL, type VARCHAR(255) NOT NULL, area VARCHAR(255) NOT NULL, town VARCHAR(255) NOT NULL, start VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, pic VARCHAR(255) NOT NULL, npoint VARCHAR(255) NOT NULL, creation_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE hike');
    }
}

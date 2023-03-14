<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230314164220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cat (id INT AUTO_INCREMENT NOT NULL, length VARCHAR(255) NOT NULL, origin VARCHAR(255) DEFAULT NULL, image_link VARCHAR(255) DEFAULT NULL, family_friendly INT DEFAULT NULL, shedding INT DEFAULT NULL, general_health INT DEFAULT NULL, playfulness INT DEFAULT NULL, meowing INT DEFAULT NULL, children_friendly INT DEFAULT NULL, stranger_friendly INT DEFAULT NULL, grooming INT DEFAULT NULL, intelligence INT DEFAULT NULL, other_pets_friendly INT DEFAULT NULL, min_weight INT DEFAULT NULL, max_weight INT DEFAULT NULL, min_life_expectancy INT DEFAULT NULL, max_life_expectancy INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cat');
    }
}

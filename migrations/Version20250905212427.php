<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250905212427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exposition_work (id INT AUTO_INCREMENT NOT NULL, exposition_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, resume VARCHAR(255) DEFAULT NULL, width VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, support VARCHAR(255) DEFAULT NULL, INDEX IDX_30FE55A088ED476F (exposition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exposition_work ADD CONSTRAINT FK_30FE55A088ED476F FOREIGN KEY (exposition_id) REFERENCES exposition (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exposition_work DROP FOREIGN KEY FK_30FE55A088ED476F');
        $this->addSql('DROP TABLE exposition_work');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250525175540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acceuil ADD main_collection_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acceuil ADD CONSTRAINT FK_4EA6B851E3EDE560 FOREIGN KEY (main_collection_id) REFERENCES categorie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4EA6B851E3EDE560 ON acceuil (main_collection_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acceuil DROP FOREIGN KEY FK_4EA6B851E3EDE560');
        $this->addSql('DROP INDEX UNIQ_4EA6B851E3EDE560 ON acceuil');
        $this->addSql('ALTER TABLE acceuil DROP main_collection_id');
    }
}

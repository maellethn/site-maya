<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210103182139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, couleur_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_497DD634C31BA576 (couleur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couleur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, hexa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oeuvre (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, lien VARCHAR(255) NOT NULL, INDEX IDX_35FE2EFEBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD634C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id)');
        $this->addSql('ALTER TABLE oeuvre ADD CONSTRAINT FK_35FE2EFEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oeuvre DROP FOREIGN KEY FK_35FE2EFEBCF5E72D');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD634C31BA576');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('DROP TABLE oeuvre');
    }
}

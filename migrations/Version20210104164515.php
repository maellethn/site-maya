<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210104164515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE couleur_id couleur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oeuvre ADD slider TINYINT(1) NOT NULL, CHANGE categorie_id categorie_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE couleur_id couleur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oeuvre DROP slider, CHANGE categorie_id categorie_id INT DEFAULT NULL');
    }
}

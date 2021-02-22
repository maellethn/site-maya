<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210220212706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_roles (user_id INT NOT NULL, roles_id INT NOT NULL, INDEX IDX_54FCD59FA76ED395 (user_id), INDEX IDX_54FCD59F38C751C4 (roles_id), PRIMARY KEY(user_id, roles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_categorie (user_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_499D5BD0A76ED395 (user_id), INDEX IDX_499D5BD0BCF5E72D (categorie_id), PRIMARY KEY(user_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59F38C751C4 FOREIGN KEY (roles_id) REFERENCES roles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_categorie ADD CONSTRAINT FK_499D5BD0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_categorie ADD CONSTRAINT FK_499D5BD0BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie CHANGE couleur_id couleur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oeuvre CHANGE categorie_id categorie_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59F38C751C4');
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59FA76ED395');
        $this->addSql('ALTER TABLE user_categorie DROP FOREIGN KEY FK_499D5BD0A76ED395');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_roles');
        $this->addSql('DROP TABLE user_categorie');
        $this->addSql('ALTER TABLE categorie CHANGE couleur_id couleur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oeuvre CHANGE categorie_id categorie_id INT DEFAULT NULL');
    }
}

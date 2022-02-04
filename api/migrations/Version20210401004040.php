<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401004040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bateau (id INT AUTO_INCREMENT NOT NULL, nomunique VARCHAR(100) NOT NULL, nom VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, lon DOUBLE PRECISION NOT NULL, lat DOUBLE PRECISION NOT NULL, photo VARCHAR(255) NOT NULL, visitable TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_A664B05A9062267E (nomunique), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE creneau (id INT AUTO_INCREMENT NOT NULL, planning_id INT NOT NULL, nb_place_max INT NOT NULL, nb_place_restante INT NOT NULL, date DATETIME NOT NULL, INDEX IDX_F9668B5F3D865311 (planning_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musee (id INT AUTO_INCREMENT NOT NULL, heure_ouverture VARCHAR(10) NOT NULL, heure_fermeture VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, bateau_id INT NOT NULL, UNIQUE INDEX UNIQ_D499BFF6A9706509 (bateau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, creneau_id INT NOT NULL, INDEX IDX_42C849557D0729A9 (creneau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignage (id INT AUTO_INCREMENT NOT NULL, bateau_temoignages_id INT NOT NULL, auteur VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, photo VARCHAR(255) NOT NULL, audio VARCHAR(255) DEFAULT NULL, INDEX IDX_BDADBC4659470F81 (bateau_temoignages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE creneau ADD CONSTRAINT FK_F9668B5F3D865311 FOREIGN KEY (planning_id) REFERENCES planning (id)');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF6A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849557D0729A9 FOREIGN KEY (creneau_id) REFERENCES creneau (id)');
        $this->addSql('ALTER TABLE temoignage ADD CONSTRAINT FK_BDADBC4659470F81 FOREIGN KEY (bateau_temoignages_id) REFERENCES bateau (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF6A9706509');
        $this->addSql('ALTER TABLE temoignage DROP FOREIGN KEY FK_BDADBC4659470F81');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849557D0729A9');
        $this->addSql('ALTER TABLE creneau DROP FOREIGN KEY FK_F9668B5F3D865311');
        $this->addSql('DROP TABLE bateau');
        $this->addSql('DROP TABLE creneau');
        $this->addSql('DROP TABLE musee');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE temoignage');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221009080053 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ecole_doctorale (id INT AUTO_INCREMENT NOT NULL, institutions_id INT DEFAULT NULL, nom_ecole_doctorale VARCHAR(255) NOT NULL, domaine_ecole_doctorale VARCHAR(100) DEFAULT NULL, directeur_ecole_doctorale VARCHAR(100) DEFAULT NULL, type_ecole_doctorale VARCHAR(100) DEFAULT NULL, arrete_mise_en_place VARCHAR(100) DEFAULT NULL, date_arrete_mise_en_place DATETIME DEFAULT NULL, departements LONGTEXT DEFAULT NULL, date_ouverture DATETIME DEFAULT NULL, note_presentation VARCHAR(100) DEFAULT NULL, INDEX IDX_7EE978D0E3BADB69 (institutions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe_accueil (id INT AUTO_INCREMENT NOT NULL, ecole_doctorale_id_id INT DEFAULT NULL, intitule_equipe_accueil VARCHAR(255) NOT NULL, responsable_equipe_accueil VARCHAR(100) DEFAULT NULL, centre_laboratoire VARCHAR(100) DEFAULT NULL, INDEX IDX_DA995002DBF88E02 (ecole_doctorale_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE institution (id INT AUTO_INCREMENT NOT NULL, nom_institution VARCHAR(255) NOT NULL, type_institution VARCHAR(100) DEFAULT NULL, domaine_institution VARCHAR(100) DEFAULT NULL, grade_institution VARCHAR(100) DEFAULT NULL, mention_institution VARCHAR(255) DEFAULT NULL, reference_date DATETIME DEFAULT NULL, departement_institution VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE representant (id INT AUTO_INCREMENT NOT NULL, ecole_doctorale_id_id INT DEFAULT NULL, nom_representant VARCHAR(100) NOT NULL, entite_arepresentant VARCHAR(255) DEFAULT NULL, INDEX IDX_80D5DBC9DBF88E02 (ecole_doctorale_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unite_transversale (id INT AUTO_INCREMENT NOT NULL, ecole_doctorale_id_id INT DEFAULT NULL, intitule_unite_transversale VARCHAR(255) NOT NULL, responsable_unite_transversale VARCHAR(100) DEFAULT NULL, volume_horaire VARCHAR(100) DEFAULT NULL, type_unite_transversale VARCHAR(100) DEFAULT NULL, INDEX IDX_AF138F10DBF88E02 (ecole_doctorale_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ecole_doctorale ADD CONSTRAINT FK_7EE978D0E3BADB69 FOREIGN KEY (institutions_id) REFERENCES institution (id)');
        $this->addSql('ALTER TABLE equipe_accueil ADD CONSTRAINT FK_DA995002DBF88E02 FOREIGN KEY (ecole_doctorale_id_id) REFERENCES ecole_doctorale (id)');
        $this->addSql('ALTER TABLE representant ADD CONSTRAINT FK_80D5DBC9DBF88E02 FOREIGN KEY (ecole_doctorale_id_id) REFERENCES ecole_doctorale (id)');
        $this->addSql('ALTER TABLE unite_transversale ADD CONSTRAINT FK_AF138F10DBF88E02 FOREIGN KEY (ecole_doctorale_id_id) REFERENCES ecole_doctorale (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ecole_doctorale DROP FOREIGN KEY FK_7EE978D0E3BADB69');
        $this->addSql('ALTER TABLE equipe_accueil DROP FOREIGN KEY FK_DA995002DBF88E02');
        $this->addSql('ALTER TABLE representant DROP FOREIGN KEY FK_80D5DBC9DBF88E02');
        $this->addSql('ALTER TABLE unite_transversale DROP FOREIGN KEY FK_AF138F10DBF88E02');
        $this->addSql('DROP TABLE ecole_doctorale');
        $this->addSql('DROP TABLE equipe_accueil');
        $this->addSql('DROP TABLE institution');
        $this->addSql('DROP TABLE representant');
        $this->addSql('DROP TABLE unite_transversale');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

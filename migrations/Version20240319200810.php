<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319200810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE information_about_me_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE information_about_me (id INT NOT NULL, key VARCHAR(40) NOT NULL, value VARCHAR(1200) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE article ALTER content TYPE TEXT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE information_about_me_id_seq CASCADE');
        $this->addSql('DROP TABLE information_about_me');
        $this->addSql('ALTER TABLE article ALTER content TYPE VARCHAR(2000)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210416090332 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gestori (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nome VARCHAR(45) NOT NULL, UNIQUE INDEX UNIQ_BB87D0BDE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE gestori_old');
        $this->addSql('ALTER TABLE ingredienti CHANGE id_dolce id_dolce INT DEFAULT NULL, CHANGE quantità quantità SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE vendita CHANGE id_dolce id_dolce INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gestori_old (id_gestore INT AUTO_INCREMENT NOT NULL, nome VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, email VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, password VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, UNIQUE INDEX email_UNIQUE (email), PRIMARY KEY(id_gestore)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE gestori');
        $this->addSql('ALTER TABLE ingredienti CHANGE id_dolce id_dolce INT NOT NULL, CHANGE quantità quantità SMALLINT DEFAULT 0');
        $this->addSql('ALTER TABLE vendita CHANGE id_dolce id_dolce INT NOT NULL');
    }
}

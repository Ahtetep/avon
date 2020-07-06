<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200705162301 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider ADD text VARCHAR(255) DEFAULT NULL, ADD button_name VARCHAR(50) DEFAULT NULL, ADD button_url VARCHAR(255) DEFAULT NULL, ADD item_background VARCHAR(255) NOT NULL, ADD is_used TINYINT(1) DEFAULT NULL, ADD created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider DROP text, DROP button_name, DROP button_url, DROP item_background, DROP is_used, DROP created_at');
    }
}

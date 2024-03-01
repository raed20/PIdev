<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228215712 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investissement DROP FOREIGN KEY FK_B8E64E01A76ED395');
        $this->addSql('DROP INDEX IDX_B8E64E01A76ED395 ON investissement');
        $this->addSql('ALTER TABLE investissement DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investissement ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE investissement ADD CONSTRAINT FK_B8E64E01A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B8E64E01A76ED395 ON investissement (user_id)');
    }
}

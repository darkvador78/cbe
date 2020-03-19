<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200319180828 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, for_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD category_id INT NOT NULL, ADD user_id INT NOT NULL, ADD image_name VARCHAR(255) NOT NULL, ADD updated_at DATETIME NOT NULL, DROP img');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C12469DE2 ON cours (category_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CA76ED395 ON cours (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C12469DE2');
        $this->addSql('DROP INDEX IDX_FDCA8C9C12469DE2 ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9CA76ED395 ON cours');
        $this->addSql('ALTER TABLE cours ADD img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, DROP category_id, DROP user_id, DROP image_name, DROP updated_at');
    }
}

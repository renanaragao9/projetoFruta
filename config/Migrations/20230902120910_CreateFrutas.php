<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFrutas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('frutas');

        $table->addColumn('name', 'string', [
            'limit' => 250,
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('classification', 'string', [
            'limit' => 250,
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('fresh', 'string', [
            'limit' => 5,
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('qtd', 'integer', [
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('price', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 10,
            'scale' => 2,
        ]);

        $table->addColumn('users_id', 'integer', [
            'null' => false
        ]);

        $table->addForeignKey('users_id', 'users', 'id', [
            'delete' => 'CASCADE'
        ]);

        $table->addTimestamps();

        $table->create();
    }
}

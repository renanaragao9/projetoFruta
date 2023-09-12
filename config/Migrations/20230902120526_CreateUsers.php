<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        
        $table->addPrimaryKey('id');
        
        $table->addColumn('name', 'string', [
            'limit' => 250,
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('email', 'string', [
            'limit' => 300,
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('profile', 'boolean', [
            'default' => false,
            'null' => false,
        ]);

        $table->addColumn('password', 'string', [
            'limit' => 250,
            'null' => false
        ]);

        $table->addTimestamps();

        $table->create();
    }
}

<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Createsales extends AbstractMigration
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
        $table = $this->table('sales');

        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
       
        $table->addColumn('fruta_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('discount', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 10,
            'scale' => 2,
        ]);     

        $table->addColumn('qtd_sold', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 10,
            'scale' => 2,
        ]);
        
        $table->addColumn('value_sold', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 10,
            'scale' => 2,
        ]);

        $table->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        
        $table->addForeignKey('fruta_id', 'frutas', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);

        $table->addTimestamps();

        $table->create();
    }
}

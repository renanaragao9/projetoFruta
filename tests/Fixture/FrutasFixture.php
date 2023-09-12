<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FrutasFixture
 */
class FrutasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'classification' => 'Lorem ipsum dolor sit amet',
                'fresh' => 'Lor',
                'qtd' => 1,
                'price' => 1.5,
                'users_id' => 1,
                'created_at' => 1693657517,
                'updated_at' => 1693657517,
            ],
        ];
        parent::init();
    }
}

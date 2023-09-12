<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
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
                'user_id' => 1,
                'fruta_id' => 1,
                'discount' => 1.5,
                'value_sold' => 1.5,
                'created_at' => 1693664694,
                'updated_at' => 1693664694,
            ],
        ];
        parent::init();
    }
}

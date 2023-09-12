<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'profile' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1693657511,
                'updated_at' => 1693657511,
            ],
        ];
        parent::init();
    }
}

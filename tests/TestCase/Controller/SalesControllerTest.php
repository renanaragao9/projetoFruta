<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SalesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SalesController Test Case
 *
 * @uses \App\Controller\SalesController
 */
class SalesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sales',
    ];
}

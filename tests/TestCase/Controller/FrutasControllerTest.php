<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\FrutasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\FrutasController Test Case
 *
 * @uses \App\Controller\FrutasController
 */
class FrutasControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Frutas',
    ];
}

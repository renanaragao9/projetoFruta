<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\HomController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\HomController Test Case
 *
 * @uses \App\Controller\HomController
 */
class HomControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Hom',
    ];
}

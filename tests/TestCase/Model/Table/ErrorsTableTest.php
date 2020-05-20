<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ErrorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ErrorsTable Test Case
 */
class ErrorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ErrorsTable
     */
    protected $Errors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Errors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Errors') ? [] : ['className' => ErrorsTable::class];
        $this->Errors = TableRegistry::getTableLocator()->get('Errors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Errors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

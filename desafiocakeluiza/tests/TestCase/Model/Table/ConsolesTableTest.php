<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsolesTable Test Case
 */
class ConsolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsolesTable
     */
    protected $Consoles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Consoles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Consoles') ? [] : ['className' => ConsolesTable::class];
        $this->Consoles = $this->getTableLocator()->get('Consoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Consoles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConsolesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

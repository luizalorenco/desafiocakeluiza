<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JogosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JogosTable Test Case
 */
class JogosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JogosTable
     */
    protected $Jogos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Jogos',
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
        $config = $this->getTableLocator()->exists('Jogos') ? [] : ['className' => JogosTable::class];
        $this->Jogos = $this->getTableLocator()->get('Jogos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Jogos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JogosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\JogosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

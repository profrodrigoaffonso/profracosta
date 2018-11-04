<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilasTable Test Case
 */
class FilasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilasTable
     */
    public $Filas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.filas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Filas') ? [] : ['className' => FilasTable::class];
        $this->Filas = TableRegistry::getTableLocator()->get('Filas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Filas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

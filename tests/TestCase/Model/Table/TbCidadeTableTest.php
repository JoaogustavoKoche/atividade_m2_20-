<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbCidadeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbCidadeTable Test Case
 */
class TbCidadeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TbCidadeTable
     */
    public $TbCidade;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TbCidade',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TbCidade') ? [] : ['className' => TbCidadeTable::class];
        $this->TbCidade = TableRegistry::getTableLocator()->get('TbCidade', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbCidade);

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

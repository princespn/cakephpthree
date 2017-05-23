<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventoryCodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventoryCodesTable Test Case
 */
class InventoryCodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventoryCodesTable
     */
    public $InventoryCodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventory_codes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InventoryCodes') ? [] : ['className' => 'App\Model\Table\InventoryCodesTable'];
        $this->InventoryCodes = TableRegistry::get('InventoryCodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InventoryCodes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

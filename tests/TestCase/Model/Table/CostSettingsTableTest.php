<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CostSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CostSettingsTable Test Case
 */
class CostSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CostSettingsTable
     */
    public $CostSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cost_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CostSettings') ? [] : ['className' => 'App\Model\Table\CostSettingsTable'];
        $this->CostSettings = TableRegistry::get('CostSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CostSettings);

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

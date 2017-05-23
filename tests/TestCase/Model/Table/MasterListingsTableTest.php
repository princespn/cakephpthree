<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterListingsTable Test Case
 */
class MasterListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterListingsTable
     */
    public $MasterListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master_listings',
        'app.channels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MasterListings') ? [] : ['className' => 'App\Model\Table\MasterListingsTable'];
        $this->MasterListings = TableRegistry::get('MasterListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MasterListings);

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

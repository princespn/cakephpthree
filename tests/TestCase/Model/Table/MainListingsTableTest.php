<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MainListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MainListingsTable Test Case
 */
class MainListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MainListingsTable
     */
    public $MainListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.main_listings',
        'app.channels',
        'app.master_listings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MainListings') ? [] : ['className' => 'App\Model\Table\MainListingsTable'];
        $this->MainListings = TableRegistry::get('MainListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MainListings);

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

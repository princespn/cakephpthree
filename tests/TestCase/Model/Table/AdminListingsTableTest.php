<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminListingsTable Test Case
 */
class AdminListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminListingsTable
     */
    public $AdminListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.admin_listings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdminListings') ? [] : ['className' => 'App\Model\Table\AdminListingsTable'];
        $this->AdminListings = TableRegistry::get('AdminListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdminListings);

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

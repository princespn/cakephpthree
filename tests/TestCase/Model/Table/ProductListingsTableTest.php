<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductListingsTable Test Case
 */
class ProductListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductListingsTable
     */
    public $ProductListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_listings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductListings') ? [] : ['className' => 'App\Model\Table\ProductListingsTable'];
        $this->ProductListings = TableRegistry::get('ProductListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductListings);

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

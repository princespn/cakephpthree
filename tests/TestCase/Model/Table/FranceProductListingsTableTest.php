<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FranceProductListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FranceProductListingsTable Test Case
 */
class FranceProductListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FranceProductListingsTable
     */
    public $FranceProductListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.france_product_listings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FranceProductListings') ? [] : ['className' => 'App\Model\Table\FranceProductListingsTable'];
        $this->FranceProductListings = TableRegistry::get('FranceProductListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FranceProductListings);

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

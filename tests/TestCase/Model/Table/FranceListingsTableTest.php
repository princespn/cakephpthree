<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FranceListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FranceListingsTable Test Case
 */
class FranceListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FranceListingsTable
     */
    public $FranceListings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.france_listings',
        'app.users',
        'app.external_products',
        'app.fulfillment_centers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FranceListings') ? [] : ['className' => 'App\Model\Table\FranceListingsTable'];
        $this->FranceListings = TableRegistry::get('FranceListings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FranceListings);

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

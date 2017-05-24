<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplierMultipliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplierMultipliersTable Test Case
 */
class SupplierMultipliersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplierMultipliersTable
     */
    public $SupplierMultipliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supplier_multipliers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SupplierMultipliers') ? [] : ['className' => 'App\Model\Table\SupplierMultipliersTable'];
        $this->SupplierMultipliers = TableRegistry::get('SupplierMultipliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SupplierMultipliers);

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

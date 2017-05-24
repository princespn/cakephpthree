<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MultipliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MultipliersTable Test Case
 */
class MultipliersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MultipliersTable
     */
    public $Multipliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.multipliers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Multipliers') ? [] : ['className' => 'App\Model\Table\MultipliersTable'];
        $this->Multipliers = TableRegistry::get('Multipliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Multipliers);

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

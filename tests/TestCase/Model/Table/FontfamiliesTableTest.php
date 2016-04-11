<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FontfamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FontfamiliesTable Test Case
 */
class FontfamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FontfamiliesTable
     */
    public $Fontfamilies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fontfamilies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fontfamilies') ? [] : ['className' => 'App\Model\Table\FontfamiliesTable'];
        $this->Fontfamilies = TableRegistry::get('Fontfamilies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fontfamilies);

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

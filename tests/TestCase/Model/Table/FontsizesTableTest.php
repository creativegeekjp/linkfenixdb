<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FontsizesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FontsizesTable Test Case
 */
class FontsizesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FontsizesTable
     */
    public $Fontsizes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fontsizes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fontsizes') ? [] : ['className' => 'App\Model\Table\FontsizesTable'];
        $this->Fontsizes = TableRegistry::get('Fontsizes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fontsizes);

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

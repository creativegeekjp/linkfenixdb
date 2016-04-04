<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IframesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IframesTable Test Case
 */
class IframesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IframesTable
     */
    public $Iframes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.iframes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Iframes') ? [] : ['className' => 'App\Model\Table\IframesTable'];
        $this->Iframes = TableRegistry::get('Iframes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Iframes);

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

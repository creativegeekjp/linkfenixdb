<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IframecolorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IframecolorsTable Test Case
 */
class IframecolorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IframecolorsTable
     */
    public $Iframecolors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.iframecolors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Iframecolors') ? [] : ['className' => 'App\Model\Table\IframecolorsTable'];
        $this->Iframecolors = TableRegistry::get('Iframecolors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Iframecolors);

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

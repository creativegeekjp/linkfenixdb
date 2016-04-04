<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IframelinksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IframelinksTable Test Case
 */
class IframelinksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IframelinksTable
     */
    public $Iframelinks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.iframelinks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Iframelinks') ? [] : ['className' => 'App\Model\Table\IframelinksTable'];
        $this->Iframelinks = TableRegistry::get('Iframelinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Iframelinks);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CastsTable Test Case
 */
class CastsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CastsTable
     */
    public $Casts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.casts',
        'app.movies',
        'app.movies_casts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Casts') ? [] : ['className' => 'App\Model\Table\CastsTable'];
        $this->Casts = TableRegistry::get('Casts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Casts);

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

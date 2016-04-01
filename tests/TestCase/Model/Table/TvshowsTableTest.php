<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TvshowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TvshowsTable Test Case
 */
class TvshowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TvshowsTable
     */
    public $Tvshows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tvshows',
        'app.seasons',
        'app.tvshows_seasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tvshows') ? [] : ['className' => 'App\Model\Table\TvshowsTable'];
        $this->Tvshows = TableRegistry::get('Tvshows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tvshows);

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

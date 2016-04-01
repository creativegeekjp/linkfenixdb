<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpisodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpisodesTable Test Case
 */
class EpisodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EpisodesTable
     */
    public $Episodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.episodes',
        'app.seasons',
        'app.seasons_episodes',
        'app.tvshows',
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
        $config = TableRegistry::exists('Episodes') ? [] : ['className' => 'App\Model\Table\EpisodesTable'];
        $this->Episodes = TableRegistry::get('Episodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Episodes);

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

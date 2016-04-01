<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeasonsEpisodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeasonsEpisodesTable Test Case
 */
class SeasonsEpisodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeasonsEpisodesTable
     */
    public $SeasonsEpisodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seasons_episodes',
        'app.episodes',
        'app.seasons',
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
        $config = TableRegistry::exists('SeasonsEpisodes') ? [] : ['className' => 'App\Model\Table\SeasonsEpisodesTable'];
        $this->SeasonsEpisodes = TableRegistry::get('SeasonsEpisodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SeasonsEpisodes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TvshowsSeasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TvshowsSeasonsTable Test Case
 */
class TvshowsSeasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TvshowsSeasonsTable
     */
    public $TvshowsSeasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tvshows_seasons',
        'app.seasons',
        'app.episodes',
        'app.seasons_episodes',
        'app.tvshows',
        'app.links',
        'app.movies',
        'app.casts',
        'app.movies_casts',
        'app.genres',
        'app.movies_genres',
        'app.tvshows_casts',
        'app.tvshows_genres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TvshowsSeasons') ? [] : ['className' => 'App\Model\Table\TvshowsSeasonsTable'];
        $this->TvshowsSeasons = TableRegistry::get('TvshowsSeasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TvshowsSeasons);

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

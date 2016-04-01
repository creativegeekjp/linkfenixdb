<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TvshowsGenresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TvshowsGenresTable Test Case
 */
class TvshowsGenresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TvshowsGenresTable
     */
    public $TvshowsGenres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tvshows_genres',
        'app.tvshows',
        'app.seasons',
        'app.episodes',
        'app.seasons_episodes',
        'app.tvshows_seasons',
        'app.genres',
        'app.movies',
        'app.links',
        'app.casts',
        'app.movies_casts',
        'app.movies_genres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TvshowsGenres') ? [] : ['className' => 'App\Model\Table\TvshowsGenresTable'];
        $this->TvshowsGenres = TableRegistry::get('TvshowsGenres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TvshowsGenres);

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

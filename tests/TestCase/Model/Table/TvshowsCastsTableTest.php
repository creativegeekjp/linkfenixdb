<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TvshowsCastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TvshowsCastsTable Test Case
 */
class TvshowsCastsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TvshowsCastsTable
     */
    public $TvshowsCasts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tvshows_casts',
        'app.tvshows',
        'app.seasons',
        'app.episodes',
        'app.seasons_episodes',
        'app.tvshows_seasons',
        'app.casts',
        'app.movies',
        'app.links',
        'app.movies_casts',
        'app.genres',
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
        $config = TableRegistry::exists('TvshowsCasts') ? [] : ['className' => 'App\Model\Table\TvshowsCastsTable'];
        $this->TvshowsCasts = TableRegistry::get('TvshowsCasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TvshowsCasts);

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

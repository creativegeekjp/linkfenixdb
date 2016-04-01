<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TvshowsGenresController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TvshowsGenresController Test Case
 */
class TvshowsGenresControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

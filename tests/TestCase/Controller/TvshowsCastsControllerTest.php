<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TvshowsCastsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TvshowsCastsController Test Case
 */
class TvshowsCastsControllerTest extends IntegrationTestCase
{

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

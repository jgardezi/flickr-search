<?php

namespace Tests\Unit;

use Mockery as m;
use Tests\TestCase;
use App\Repositories\FlickrRepositoryContract;

class FlickrTest extends TestCase
{
    public $flickr;

    public function setUp()
    {
        parent::setUp();

        // create a mock of the post repository interface and inject it into the
        // IoC container
        $this->flickr = m::mock(FlickrRepositoryContract::class);
        $this->app->instance(FlickrRepositoryContract::class, $this->flickr);
    }

    public function tearDown()
    {
        m::close();
        parent::tearDown();
    }

    /**
     * Basic obj test in Flickr repository.
     *
     * More complicated test cases can be made
     */
    public function testFlickrObj()
    {

        $this->flickr->shouldReceive('getFlickrApiObj');
    }

    public function testSearchResultsRepository()
    {
        $this->flickr->shouldReceive('searchPhotos');
    }

    public function testPhotoDetailsRepository()
    {
        $this->flickr->shouldReceive('findOrThrowException');
    }
}

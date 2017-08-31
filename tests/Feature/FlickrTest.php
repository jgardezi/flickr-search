<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlickrTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearchPage()
    {
        $response = $this->get('/flickr');
        $response->assertStatus(200);
    }

    public function testSearchResultsPage()
    {
        $response = $this->get('/flickr/search?search=awsesome');
        $response->assertStatus(200);
    }

    public function testPhotoDetailsPage()
    {
        $response = $this->get('/flickr/5622474018');
        $response->assertStatus(200);
    }
}

<?php

namespace App\Repositories;

use App\Http\Requests\FlickrSearchRequest;

interface FlickrRepositoryContract
{
    /**
     * Test Flickr API connection.
     *
     * @return string
     */
    public function testFlickrApi();

    /**
     * Find a photo
     *
     * @param int $id unique photo identifier
     * @return mixed
     */
    public function findOrThrowException($id);

    /**
     * Search Flickr Photos by tags
     *
     * @param FlickrSearchRequest $input
     * @param int $per_page
     * @return mixed
     */
    public function searchPhotos($input, $per_page);
}
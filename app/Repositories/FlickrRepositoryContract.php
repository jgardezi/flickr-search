<?php
/**
 * Created by PhpStorm.
 * User: jgardezi
 * Date: 30/8/17
 * Time: 5:21 AM
 */

namespace app\Repositories;


interface FlickrRepositoryContract
{
    /**
     * Search Flickr Photo interface
     *
     * @param $input
     * @param $per_page
     * @return mixed
     */
    public function searchPhotos($input, $per_page);
}
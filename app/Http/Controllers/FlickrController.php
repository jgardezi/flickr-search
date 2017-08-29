<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JeroenG\Flickr;

class FlickrController extends Controller
{
    protected $flickr;

    public function __construct()
    {
        $api = new Flickr\Api(env('FLICKR_KEY'), env('FLICKR_API_FORMAT'));
        $this->flickr = new Flickr\Flickr($api);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Flickr\Response|string
     * @throws \Exception
     */
    public function index()
    {
        try {
            $test = $this->flickr->echoThis('HelloFlickr');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        // $test->stat
        return view('flickr.index');
    }

    /**
     * Search photos
     */
    public function search()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}

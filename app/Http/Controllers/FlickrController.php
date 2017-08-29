<?php

namespace App\Http\Controllers;

use JeroenG\Flickr;
use Illuminate\Http\Request;
use App\Http\Requests\FlickrSearchRequest;

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
     * @todo move echoThis to unittest to test flickr API connection
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
     *
     * @param FlickrSearchRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function search(FlickrSearchRequest $request)
    {
        $searchTerm = $request->get('search');
        try {
            $result = $this->flickr->request('flickr.photos.search', [
                'tags' => $searchTerm,
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        return view('flickr.search', $result);
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

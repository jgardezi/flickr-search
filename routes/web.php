<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('flickr/search', ['as' => 'flickr.search', 'uses' => 'FlickrController@search']);
Route::post('flickr/search', ['as' => 'flickr.search', 'uses' => 'FlickrController@search']);
Route::get('flickr/{id}', ['as' => 'flickr.photo', 'uses' => 'FlickrController@show'])->where(['id' => '[0-9]+']);
Route::get('flickr', ['as' => 'flickr.index', 'uses' => 'FlickrController@index']);
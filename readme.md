<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

_**CODE & DOCUMENTATION IN DEVELOPMENT**_

<p align="center">
[![Build Status](https://travis-ci.org/jgardezi/flickr-search.svg?branch=master)](https://travis-ci.org/jgardezi/flickr-search)
</p>

## Flickr Photo Search

Simple Flickr Search API allows users to search for photos by **tags** and allows users to go to full details of photos.

### API's integration
- [API used flickr.photos.search](https://www.flickr.com/services/api/flickr.photos.search.html)

### Requirements
- PHP >= 7
- Composer
- Laravel Homestead
- MCrypt PHP Extension
- Travis CI - For Code Quality, Consistency, Adherence to standards and Automated Tests

## Setup
- Clone this repository
- In the project directory issue `composer install` command
- Install node packages `npm install`
- Build JS and CSS using `npm run dev`
- To see on web browser `php artisan serve`

## Application Testing/Demo
- Using web browser

## Package Used
- [jeroen-g/flickr](https://github.com/Jeroen-G/Flickr): Flickr API integration
- [laravelcollective/html](https://laravelcollective.com/docs/5.4/html): Laravel HTML forms

## References

- The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
- [Repository Pattern](https://bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/)

## Future improvement
- Dockers
- Micro-services (use of Lumen framework instead Laravel, more generic)

## TODO
- Implement repository pattern
- Write unit tests
- Display paginated search results
- Fix Travis CI issues and add PHP_CodeCoverage, phpmd
- Show full details of photo
- Expose search API's (optional)

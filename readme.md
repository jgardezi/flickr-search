<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/jgardezi/flickr-search"><img src="https://travis-ci.org/jgardezi/flickr-search.svg" alt="Build Status"></a>
</p>

## Flickr Photo Search

Simple Flickr Search API allows users to search for photos by **tags** and allows users to go to full details of photos.

The project is structured using repository pattern. It provide a layer of abstraction over the datasource/database. Instead of 
directly interacting with the Flickr API's, the controllers interact with a repository class that encapsulates all the 
API layer interactions. 

The advantage of this approach is that controller is no longer directly coupled to the model layer. For small projects 
lot of unnecessary boilerplate has been added. However, for larger projects with more complexity and changing requirements,
this layer of abstraction is incredibly useful.

- Easily migrate to a different ORM or database layer technology.
- Easily "mock" the repository class in unit tests.

**Flickr API's**
- [flickr.photos.search](https://www.flickr.com/services/api/flickr.photos.search.html)
- [flickr.photos.getInfo](https://www.flickr.com/services/api/flickr.photos.getInfo.html)

### Requirements
- PHP >= 7
- MCrypt PHP Extension
- Composer
- Laravel Homestead
- Travis CI - For Code Quality, Consistency, Adherence to standards and Automated Tests

## Setup
- Clone this repository
- In the project directory issue `composer install` command
- Install node packages `npm install`
- Build JS and CSS using `npm run dev`
- To see on web browser `php artisan serve` or use Homestead

## Application Testing/Demo
- Using web browser path: [demo link](http://flickr-search.ap-southeast-2.elasticbeanstalk.com/flickr)
- Testing covers basic Unit and Functional Testing. If using Homestead run `phpunit` in the project directory.

## Future improvement
- Dockers
- Micro-services (use of Lumen framework instead Laravel, more generic)

## TODO
- Better UI implementation
- Expose search API's (optional)

## References
- The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
- [jeroen-g/flickr](https://github.com/Jeroen-G/Flickr): Flickr API integration
- [laravelcollective/html](https://laravelcollective.com/docs/5.4/html): Laravel HTML forms
- [Repository Pattern](https://bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/)

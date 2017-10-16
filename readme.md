~Install using Composer
composer create-project --prefer-dist laravel/laravel forum

~Color CMD in Windows
http://adoxa.altervista.org/ansicon/index.html 

~Make Model with Resourceful Controller
php artisan make:model Thread -mr
php artisan make:model Reply -mr

~Generate Log In and Register Pages (includes a layout)
php artisan make:auth

~Tinker
php artisan tinker

~Generate Threads
$threads = factory('App\Thread',50)->create();

~Generate Reply for each Thread
$threads->each(function ($thread) { factory('App\Reply',10)->create(['thread_id' => $thread->id]); });

NOTE: Test outside in

~Make Test
php artisan make:test ReplyTest --unit

~Running Tests
php vendor/phpunit/phpunit/phpunit (Windows)
NOTE: Use annotation above function for phpunit to process it: /** @test */
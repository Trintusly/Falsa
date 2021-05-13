<?php

$r = new Router;

$r->route('/', function () {

	View::dispatch('index');

});

$r->route('/about', function () {

    View::dispatch('about');

});

$r->route('/contact', function () {

	View::dispatch('contact');

});

$r->route('/profile/{username}', function ($username) {

	View::dispatch('profile', [ 'username' => $username ]);

});


$r->dispatch($_SERVER['REQUEST_URI']);

?>
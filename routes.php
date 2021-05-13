<?php

$r = new Router;

// Lets declare our routes in an array

$routes = [

	/* route => view */
	
	'/'  	 => 'index',
	'/about' => 'about'

];

// Loop through the array

foreach ($routes as $route => $view) {

	// Register our routes

	$r->handle($route, function () {

		$v = new View($view);
		$v->dispatch();

	});

}

// Dispatch our routes

$r->dispatch($_SERVER['REQUEST_URI']);

// We are live, it's just that simple!

?>
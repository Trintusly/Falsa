<?php

	// When a route is not found, this page is rendered.

	Component::load('page', [ 

		'title'    => '404', 
		'subtitle' => 'This page does not exist. Yet.' 

	]);

	// Optional, but a good practice none-the-less.

	Http::status(404);

?>
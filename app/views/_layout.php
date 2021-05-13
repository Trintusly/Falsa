<!DOCTYPE html>
<html>
<head>

	<title>Falsa Framework</title>

	<?php

		Html::CSS('/public/assets/app.min.css');
		Html::JS('/public/assets/app.js');

	?>

</head>
<body>

	<?php

		// Load in our navbar for app/components/nav.php

		Component::load('nav', [
			
			// You can alter the navbar title from here, give it a try!

			"title" => "Falsa Framework"

		]);

		// Inject our declared views into _layout

		View::inject($_router->view);

		// Load in our footer

		Component::load('footer');

	?>

</body>
</html>
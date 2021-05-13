<?php

class Html {

	public static function CSS( $path ) {

		if (is_array($path)) {

			foreach ($path as $p) {

				echo '<link rel="stylesheet" type="text/css" href="' .$p. '">';

			}

			return;
		
		}

		echo '<link rel="stylesheet" type="text/css" href="' .$path. '">';

		
	}

	public static function JS( $path ) {
		
		if (is_array($path)) {

			foreach ($path as $p) {

				echo '<script type="text/javascript" src="' .$p. '"></script>';

			}

			return;
		
		}

		echo '<script type="text/javascript" src="' .$path. '"></script>';

	}

}

?>
<?php

class Component {

	public static function load( $path, $params = [] ) {

		$path = $_SERVER['DOCUMENT_ROOT'] . "/app/components/" .$path. ".php";

		if (!file_exists($path)) {

			throw new Exception('Component does not exist!');
			return;

		}

		$_component = (object) [

			'params' => (object) $params

		];

		require $path;

	}

}

?>
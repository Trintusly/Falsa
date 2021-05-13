<?php

class View {

	public static function dispatch( $path, $params = [] ) {

		$route = $_SERVER['DOCUMENT_ROOT'] . "/app/views/" .$path. ".php";

		if (!file_exists($route)) {

			throw new Exception('Route does not exist!');
			return;

		}

		$_router = (object) [

			'view'	 => $route,
			'params' => (object) $params

		];

		require_once $_SERVER['DOCUMENT_ROOT'] . "/app/views/_layout.php";
		
		return;

	}

}

?>
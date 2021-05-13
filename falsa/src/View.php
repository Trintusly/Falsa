<?php

class View {

	private $view;

	public function __construct( $view ) {

		$this->view = $view;

	}

	public function dispatch( $params = [] ) {

		$route = $_SERVER['DOCUMENT_ROOT'] . "/app/views/" .$this->view. ".php";

		if (!file_exists($route)) {

			throw new Exception('Route does not exist!');
			return;

		}

		$_router = (object) [

			'view'	 => $route,
			'params' => (object) $params

		];

		require_once $_SERVER['DOCUMENT_ROOT'] . "/app/views/_layout.php";
		
		return 0;

	}

	public static function inject( $path ) {

		require_once $path;

	}

}

?>
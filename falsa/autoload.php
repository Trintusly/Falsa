<?php

class Autoload {

	public static function register() {

		spl_autoload_register(

			function ($class) {

			    $directories = [

			    	$_SERVER['DOCUMENT_ROOT'] . '/falsa/src/',
                    
			    ];
			   
			    foreach ($directories as $directory) {

			        if (file_exists($directory . $class . '.php')) {

			            require_once $directory . $class . '.php';

			        } 

			    }

			}

		);

	}

}

Autoload::register();

?>
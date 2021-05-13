<?php

class Router {

	private $routes = [];

	public function route($action, Closure $callback) {
		
	    $action = trim($action, '/');
	    $action = preg_replace('/{[^}]+}/', '(.+)', $action);
		$this->routes[ $action ] = $callback;

	}

	public function dispatch($action) {

		$action = trim($action, '/');

		$callback = null;
		$params = [];

		foreach ($this->routes as $route => $handler) {
			
	        if(preg_match("%^{$route}$%", $action, $matches) === 1) {

	            $callback = $handler;
	            unset($matches[0]);
	            $params = $matches;
	            break;

	        }

		}

	    if(!$callback || !is_callable($callback)) {
			
			// When route not found, render _fallback
	        View::dispatch('_fallback');
	        return;
	        
	    }

    	call_user_func($callback, ...$params);

	}

}

?>
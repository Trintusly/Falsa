<?php

class Http {

	public static function status( $status ) {

		http_response_code($status);

	}

}

?>
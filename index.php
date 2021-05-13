<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'falsa/src/Html.php';
require_once 'falsa/src/Http.php';
require_once 'falsa/src/Component.php';
require_once 'falsa/src/View.php';

$v = new View('contact');
$v->dispatch();

?>
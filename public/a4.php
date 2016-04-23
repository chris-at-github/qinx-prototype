<?php

error_reporting(E_ALL ^ E_STRICT);

define('A4_PATH', realpath(__DIR__ . '/..'));
define('A4_VERSION', '0.0.1');

require(A4_PATH . '/vendor/autoload.php');

$a4 = new \A4\Application();
$a4->execute($_REQUEST['page']);
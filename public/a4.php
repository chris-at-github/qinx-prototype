<?php

define('A4_PATH', realpath(__DIR__ . '/..'));
define('A4_VERSION', '0.0.1');

require(A4_PATH . '/A4/Application.php');

$a4 = new Application();
$a4->execute($_REQUEST['page']);
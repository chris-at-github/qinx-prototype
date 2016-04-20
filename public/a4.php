<?php

define('A4_PATH', realpath(__DIR__ . '/..'));
define('A4_VERSION', '0.0.1');

require(A4_PATH . '/a4/application.php');

$g4 = new Application();
$g4->execute($_REQUEST['page']);
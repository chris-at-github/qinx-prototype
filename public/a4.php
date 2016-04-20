<?php

define('_A4_PATH', realpath(__DIR__ . '/..'));
define('_A4_VERSION', '0.0.1');

require(_A4_PATH . '/a4/application.php');

$g4 = new Application();
$g4->execute($_REQUEST['page']);
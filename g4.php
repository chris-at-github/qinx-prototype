<?php

define('_G4_PATH', __DIR__);
define('_G4_VERSION', '0.0.1');

require _G4_PATH . '/g4/application.php';
$g4 = new Application();
$g4->execute($_REQUEST['page']);
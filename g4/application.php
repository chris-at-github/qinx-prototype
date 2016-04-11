<?php

class Application {
	public function __construct() {
	}

	public function execute($sPage) {
		$sPage					= trim($sPage, '/');
		$sRealPagepath 	= $this->getRealPagepath($sPage);

		echo $sRealPagepath;
	}

	protected function getRealPagepath($sPage) {
		$sRealPagepath 	= null;
		$sPublicPath		= _G4_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

		if(is_file($sPublicPath . $sPage . '.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . '.php';
		}

		if(is_dir($sPublicPath . $sPage) === true && is_file($sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php';
		}

		return $sRealPagepath;
	}
}
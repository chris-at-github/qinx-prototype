<?php

class Application {
	public function __construct() {
	}

	public function execute($sPage) {
		$sPage					= trim($sPage, '/');
		$sRealPagepath 	= $this->getRealPagepath($sPage);

		echo $sRealPagepath;
	}

	/**
	 * Returns the realpath from the requested file
	 *
	 * @param $sPage
	 * @return null|string
	 */
	protected function getRealPagepath($sPage) {
		$sRealPagepath 	= null;
		$sPublicPath		= _A4_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

		// get file directly by filename '/abc/def.php'
		if(is_file($sPublicPath . $sPage . '.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . '.php';
		}

		// filename is index.php in a folder '/abc/index.php'
		if(is_dir($sPublicPath . $sPage) === true && is_file($sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php';
		}

		return $sRealPagepath;
	}
}
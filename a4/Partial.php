<?php
namespace A4;

class Partial {

	/**
	 * Instance of current application
	 *
	 * @var \A4\Application $oApplication
	 */
	protected $oApplication;

	/**
	 * Setter for application
	 *
	 * @return \A4\Application
	 */
	public function getApplication() {
		return $this->oApplication;
	}

	/**
	 * Getter for application
	 *
	 * @param \A4\Application $oApplication
	 */
	public function setApplication(\A4\Application $oApplication) {
		$this->oApplication = $oApplication;
	}

	/**
	 * Render a partial file and output the result directly
	 *
	 * @param string $sPartial
	 * @param array $aVariables
	 * @return void
	 */
	public function render($sPartial, $aVariables = []) {
		$sPartial = $this->getRealPagepath($sPartial);
		$sOutput	= $this->getOutputBuffer($sPartial, $aVariables);

		echo $sOutput;
	}

	/**
	 * Include the target page, buffer the output
	 *
	 * @param string $sPartial
	 * @param array $aVariables
	 * @return string
	 */
	protected function getOutputBuffer($sPartial, $aVariables) {

		// Set variables that can used directly in partials
		extract($aVariables);
		$partial	= $this;
		$app 			= $this->getApplication();

		// Buffer the output, include target page
		ob_start();
		include($sPartial);
		$sOutput = ob_get_contents();
		ob_end_clean();

		return $sOutput;
	}

	/**
	 * Returns the realpath from the requested file
	 *
	 * @param $sPartial
	 * @return null|string
	 */
	protected function getRealPagepath($sPartial) {
		$sPartial			= trim($sPartial, '/');
		$sRealPath 		= null;
		$sPartialPath = A4_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'partial' . DIRECTORY_SEPARATOR;

		// get file directly by filename '/abc/def.php'
		if(is_file($sPartialPath . $sPartial . '.php') === true) {
			$sRealPath = $sPartialPath . $sPartial . '.php';
		}

		// Replace double slashes
		if($sRealPath !== null) {
			$sRealPath = str_replace(['//', '\\\\'], ['/', '\\'], $sRealPath);
		}

		return $sRealPath;
	}
}
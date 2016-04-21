<?php
namespace A4;

class Partial {

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
		extract($aVariables);

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
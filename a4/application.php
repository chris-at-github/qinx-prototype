<?php
namespace A4;

/**
 * Class Application
 * Basic class of a4 project
 *
 * @package A4
 */
class Application {

	/**
	 * Basis page view renderer
	 *
	 * @var \A4\Renderer\Renderer $sPageView
	 */
	protected $sPageRenderer = \A4\Renderer\HtmlRenderer::class;

	/**
	 * Sets the page renderer
	 *
	 * @param Renderer\Renderer $sRenderer
	 */
	public function setPageRenderer(\A4\Renderer\Renderer $sRenderer) {
		$this->sPageRenderer = $sRenderer;
	}

	/**
	 * Execute the given page path against the page renderer
	 *
	 * @param string $sPage
	 */
	public function execute($sPage) {
		$sPage					= trim($sPage, '/');
		$sRealPagepath 	= $this->getRealPagepath($sPage);

		$oPageRenderer = new $this->sPageRenderer();
		$oPageRenderer->render();
	}

	/**
	 * Returns the realpath from the requested file
	 *
	 * @param $sPage
	 * @return null|string
	 */
	protected function getRealPagepath($sPage) {
		$sRealPagepath 	= null;
		$sPublicPath		= A4_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

		// get file directly by filename '/abc/def.php'
		if(is_file($sPublicPath . $sPage . '.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . '.php';
		}

		// filename is index.php in a folder '/abc/index.php'
		if(is_dir($sPublicPath . $sPage) === true && is_file($sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php') === true) {
			$sRealPagepath = $sPublicPath . $sPage . DIRECTORY_SEPARATOR . 'index.php';
		}

		// Replace double slashes
		if($sRealPagepath !== null) {
			$sRealPagepath = str_replace(['//', '\\\\'], ['/', '\\'], $sRealPagepath);
		}

		return $sRealPagepath;
	}
}
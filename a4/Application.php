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
	 * Active page path
	 *
	 * @var string
	 */
	protected $sActivePage;

	/**
	 * Sets the page renderer
	 *
	 * @param Renderer\Renderer $sRenderer
	 * @return \A4\Application
	 */
	public function setPageRenderer(\A4\Renderer\Renderer $sRenderer) {
		$this->sPageRenderer = $sRenderer;
		return $this;
	}

	/**
	 * Sets the active page path
	 *
	 * @param string $sPage
	 * @return \A4\Application
	 */
	public function setActivePage($sPage) {
		$this->sActivePage = $sPage;
	}

	/**
	 * Returns the active page path
	 *
	 * @return string
	 */
	public function getActivePage() {
		return $this->sActivePage;
	}

	/**
	 * Execute the given page path against the page renderer
	 *
	 * @param string $sPage
	 */
	public function execute($sPage) {
		$sPage = trim($sPage, '/');
		$sRealPagepath = $this->getRealPagepath($sPage);

		$this->setActivePage(\A4\Helper\UriHelper::get($sPage));

		$sPageOutput = $this->getOutputBuffer($sRealPagepath);

		$oPageRenderer = new $this->sPageRenderer($sPageOutput);
		$oPageRenderer->render();
	}

	/**
	 * Include the target page, buffer the output
	 *
	 * @param string $sPage
	 * @return string
	 */
	public function getOutputBuffer($sPage) {
		$app 			= $this; // app is avialable in included page
		$partial	= new \A4\Partial();
		$partial->setApplication($this);

		// Buffer the output, include target page
		ob_start();
		include($sPage);
		$sOutput = ob_get_contents();
		ob_end_clean();

		return $sOutput;
	}

	/**
	 * Returns the realpath from the requested file
	 *
	 * @param $sPage
	 * @return null|string
	 */
	protected function getRealPagepath($sPage) {
		$sRealPagepath = null;
		$sPublicPath = A4_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

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
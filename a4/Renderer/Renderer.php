<?php
namespace A4\Renderer;

/**
 * Class Renderer
 * @package A4\Renderer
 */
class Renderer {

	/**
	 * Rendering source
	 *
	 * @var string $sSource
	 */
	protected $sSource;

	/**
	 * Instance of current application
	 *
	 * @var \A4\Application $oApplication
	 */
	protected $oApplication;

	/**
	 * Getter for renderer source
	 *
	 * @return string
	 */
	public function getSource() {
		return $this->sSource;
	}

	/**
	 * Setter for renderer source
	 *
	 * @param string $sSource
	 */
	public function setSource($sSource) {
		$this->sSource = $sSource;
	}

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
	 * Renderer constructor
	 *
	 * @param string|null $sSource
	 * @param \A4\Application|null $oApplication
	 */
	public function __construct($sSource = null, \A4\Application $oApplication = null) {
		if($sSource !== null) {
			$this->setSource($sSource);
		}
	}
}
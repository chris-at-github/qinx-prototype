<?php
namespace A4\Helper;

class LinkHelper extends HtmlHelper implements HelperInterface {

	/**
	 * tag name
	 *
	 * @var string $sTag
	 */
	protected $sTag = 'a';

	/**
	 * Return an A-Tag with given attributes
	 *
	 * @param string $sTarget
	 * @param string $sContent
	 * @param array $aAttributes
	 * @return string
	 */
	public function render($sTarget, $sContent = null, $aAttributes = []) {

		// Set the link target
		$this->setAttribute('href', \A4\Factory::get(\A4\Helper\UriHelper::class)->get($sTarget));

		// Set the tag content
		if($sContent === null) {
			$sContent = $sTarget;
		}
		$this->setContent($sContent);


		parent::render();
	}
}
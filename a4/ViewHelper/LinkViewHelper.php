<?php
namespace A4\ViewHelper;

class LinkViewHelper extends HtmlViewHelper implements ViewHelperInterface {

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

		// Add attributes to link
		$this->setAttributes($aAttributes);

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
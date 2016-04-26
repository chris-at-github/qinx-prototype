<?php
namespace A4\Helper;

class HtmlHelper extends Helper implements HelperInterface {

	/**
	 * tag name
	 *
	 * @var string $sTag
	 */
	protected $sTag;

	/**
	 * tag content
	 *
	 * @var string $sContent
	 */
	protected $sContent;

	/**
	 * tag attributes
	 *
	 * @var array $aAttributes
	 */
	protected $aAttributes = [];

	/**
	 * Set attributes list
	 *
	 * @param array $aAttributes
	 * @return \A4\Helper\HtmlHelper
	 */
	public function setAttributes($aAttributes) {
		foreach($aAttributes as $sName => $sValue) {
			$this->setAttribute($sName, $sValue);
		}
	}

	/**
	 * Set an attribute
	 *
	 * @param string $sName
	 * @param string $sValue
	 * @return \A4\Helper\HtmlHelper
	 */
	public function setAttribute($sName, $sValue) {
		$this->aAttributes[trim($sName)] = trim($sValue);
	}

	/**
	 * Returns the attribute list
	 *
	 * @return array
	 */
	public function getAttributes() {
		return $this->aAttributes;
	}

	/**
	 * Create a string of attributes
	 *
	 * @return string
	 */
	public function getAttributeString() {
		$aAttributes 	= $this->getAttributes();
		$aReturn			= [];

		foreach($aAttributes as $sName => $sValue) {
			$aReturn[] = $sName . '="' . $sValue . '"';
		}

		return implode(' ', $aReturn);
	}

	/**
	 * Set content
	 *
	 * @param string $sContent
	 * @return \A4\Helper\HtmlHelper
	 */
	public function setContent($sContent) {
		$this->sContent = $sContent;
	}

	/**
	 * Output the current tag, with the given attribute set
	 *
	 * @return string
	 */
	public function render() {

		$sAttributes = '';
		if(count($this->getAttributes()) !== 0) {
			$sAttributes = ' ' . $this->getAttributeString();
		}

		echo '<' . $this->sTag . $sAttributes . '>' . $this->sContent . '</' . $this->sTag . '>';
	}
}
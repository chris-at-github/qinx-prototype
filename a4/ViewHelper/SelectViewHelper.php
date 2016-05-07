<?php
namespace A4\ViewHelper;

class SelectViewHelper extends HtmlViewHelper implements ViewHelperInterface {

	/**
	 * tag name
	 *
	 * @var string $sTag
	 */
	protected $sTag = 'select';

	/**
	 * Return an Select-Tag with given attributes
	 *
	 * @param string $sName
	 * @param array $aOptions
	 * @param string|null $sSelected
	 * @param array $aAttributes
	 * @param callable $fOptionCallback
	 * @param array $aDefault
	 * @return string
	 */
	public function render($sName, $aOptions = [], $sSelected = null, $aAttributes = [], $fOptionCallback = null, $aDefault = null) {

		// Add default attributes
		$this->setAttributes($aAttributes);

		// Set the name of the field
		$this->setAttribute('name', $sName);

		// Render options
		if(empty($aOptions) === false) {
			$this->setContent($this->getOptions($aOptions, $sSelected, $fOptionCallback, $aDefault));
		}

		parent::render();
	}

	/**
	 * Render the options
	 *
	 * @param array $aOptions
	 * @param string|null $sSelected
	 * @param callable $fOptionCallback
	 * @param array $aDefault
	 * @return string
	 */
	protected function getOptions($aOptions, $sSelected, $fOptionCallback, $aDefault) {
		$aHtml = [];

		if(empty($aDefault) === false) {
			$aHtml[] = '<option value="' . key($aDefault) . '">' . current($aDefault) . '</option>';
		}

		foreach($aOptions as $sKey => $sValue) {
			if($fOptionCallback !== null && is_callable($fOptionCallback) === true) {
				list($sKey, $sValue) = $fOptionCallback($sKey, $sValue);
			}

			$sSelectedAttribute = '';
			if($sKey === $sSelected) {
				$sSelectedAttribute = ' selected="selected"';
			}


			$aHtml[] = '<option value="' . $sKey . '"' . $sSelectedAttribute . '>' . (string) $sValue . '</option>';
		}

		return implode(null, $aHtml);
	}
}
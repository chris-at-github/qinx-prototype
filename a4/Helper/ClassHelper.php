<?php
namespace A4\Helper;

class ClassHelper extends Helper implements HelperInterface {

	/**
	 * Returns the class name without namespace
	 *
	 * @param string|object $mClass
	 * @return string
	 */
	public static function toString($mClass) {
		if(gettype($mClass) === 'object') {
			$mClass = get_class($mClass);
		}

		if(($iPosition = strrpos($mClass, '\\')) !== false) {
			$mClass = substr($mClass, $iPosition + 1);
		}

		return $mClass;
	}
}
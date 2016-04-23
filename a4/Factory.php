<?php
namespace A4;

class Factory {

	/**
	 * Simple class loader
	 *
	 * @param $sClass
	 */
	public static function get($sClass) {
		return new $sClass();
	}
}
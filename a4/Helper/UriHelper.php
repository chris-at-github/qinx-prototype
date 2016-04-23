<?php
namespace A4\Helper;

class UriHelper extends Helper {

	/**
	 * Return a clean url for a given target
	 *
	 * @param string $target
	 * @return string
	 */
	public static function get($target) {
		$target = '/' . trim($target) . '/';
		$target = str_replace(['//', '\\\\'], ['/', '\\'], $target);

		return $target;
	}
}
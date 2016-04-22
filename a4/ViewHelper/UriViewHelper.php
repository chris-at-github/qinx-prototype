<?php
namespace A4\ViewHelper;

class UriViewHelper extends ViewHelper {

	/**
	 * Return a clean url for a given target
	 *
	 * @param string $target
	 * @return string
	 */
	public static function get($target) {
		$target = '/' . $target . '/';
		$target = str_replace(['//', '\\\\'], ['/', '\\'], $target);

		return $target;
	}
}
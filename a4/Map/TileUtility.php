<?php
namespace A4\Map;

class TileUtility {

	/**
	 * Create an Uuid for a single tile
	 *
	 * @param int $x
	 * @param int $y
	 * @return string
	 */
	public static function getUuid($x, $y) {
		return md5($x . ':' . $y);
	}
}
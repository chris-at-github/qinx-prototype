<?php

namespace A4\Map;

class Tile {

	/**
	 * X-Coordinate of the tile
	 *
	 * @var int
	 */
	public $x;
	/**
	 * Y-Coordinate of the tile
	 *
	 * @var int
	 */
	public $y;

	/**
	 * Gets the X-Coordinate of the tile.
	 *
	 * @return int
	 */
	public function getX() {
		return $this->x;
	}
	/**
	 * Sets the X-Coordinate of the tile.
	 *
	 * @param int $x the x
	 * @return \A4\Map\Tile
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}
	/**
	 * Gets the Y-Coordinate of the tile.
	 *
	 * @return int
	 */
	public function getY() {
		return $this->y;
	}
	/**
	 * Sets the Y-Coordinate of the tile.
	 *
	 * @param int $y the y
	 * @return \A4\Map\Tile
	 */
	public function setY($y) {
		$this->y = $y;
		return $this;
	}

	/**
	 * Render all tiles for the given size
	 *
	 * @return void
	 */
	public function render() {
		return '<div class="map--tile" data-x="' . $this->getX() . '" data-y="' . $this->getY() . '"></div>';
	}
}
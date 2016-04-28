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
	 * Uuid of the tile
	 *
	 * @var string $sUuid
	 */
	protected $sUuid;

	/**
	 * @return mixed
	 */
	public function getUuid() {
		return $this->sUuid;
	}

	/**
	 * @param mixed $sUuid
	 * @return \A4\Map\Tile
	 */
	public function setUuid($sUuid) {
		$this->sUuid = $sUuid;
		return $this;
	}

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
	public function toHtml() {
		return '<div class="map--tile" data-uuid="'. $this->getUuid() . '" data-x="' . $this->getX() . '" data-y="' . $this->getY() . '"></div>';
	}
}
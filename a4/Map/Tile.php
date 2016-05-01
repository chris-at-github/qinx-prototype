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
	 * Objects assigned to one tile
	 *
	 * @var array
	 */
	protected $aObjects = [];

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
	 * Return the array of tile objects
	 *
	 * @return array
	 */
	public function getObjects() {
		return $this->aObjects;
	}

	/**
	 * Set the array of tile objects
	 *
	 * @param array $aObjects
	 */
	public function setObjects($aObjects) {
		$this->aObjects = $aObjects;
	}

	/**
	 * Check if a tile has tile objects
	 *
	 * @return boolean
	 */
	public function hasObject() {
		if(empty($this->aObjects) === false) {
			return true;
		}

		return false;
	}

	/**
	 * Add a tile object
	 *
	 * @param \A4\Map\TileObject $oObject
	 */
	public function addObject(\A4\Map\TileObject $oObject) {

		// Generate a new Uuid and add that to the object
		$sUuid = md5($this->getUuid() . ':' . md5($oObject->getNamespace()));
		$oObject->setUuid($sUuid);

		// Add the new object to collection
		$this->aObjects[$sUuid] = $oObject;
	}

	/**
	 * Render all tiles for the given size
	 *
	 * @return void
	 */
	public function toHtml() {
		$aHtml[] = '<div class="map--tile" data-uuid="' . $this->getUuid() . '" data-x="' . $this->getX() . '" data-y="' . $this->getY() . '">';

		/* @var \A4\Map\TileObject $oObject */
		foreach($this->getObjects() as $oObject) {
			$aHtml[] = $oObject->toHtml();
		}

		$aHtml[] = '</div>';

		return implode(null, $aHtml);
	}
}
<?php

namespace A4\Map;

class Map {

	/**
	 * Size (number of tiles in x and y axis)
	 *
	 * @var array $aSize
	 */
	protected $aSize = [
		'x'	=> 0,
		'y'	=> 0
	];

	/**
	 * Array for all tiles in this map
	 *
	 * @var array $aTiles
	 */
	protected $aTiles = [];

	/**
	 * Sets the size of x and y tiles
	 *
	 * @param int $x
	 * @param int $y
	 * @return \A4\Map\Map
	 */
	public function setSize($x, $y) {
		$this->aSize = [
			'x'	=> $x,
			'y'	=> $y
		];

		return $this;
	}

	/**
	 * @return array
	 */
	public function getTiles() {
		return $this->aTiles;
	}

	/**
	 * @param array $aTiles
	 * @return \A4\Map\Map
	 */
	public function setTiles($aTiles) {
		$this->aTiles = $aTiles;
		return $this;
	}

	/**
	 * Return a single tile
	 *
	 * @param $sUuid
	 * @return \A4\Map\Tile $oTile
	 */
	public function getTile($sUuid) {
		if(isset($this->aTiles[$sUuid]) === true) {
			return $this->aTiles[$sUuid];
		}

		return null;
	}

	/**
	 * Add a new tile
	 *
	 * @param \A4\Map\Tile $oTile
	 * @return \A4\Map\Map
	 */
	public function addTile(\A4\Map\Tile $oTile) {
		$sUuid = $oTile->getUuid();

		if(isset($sUuid) === false) {
			$sUuid = \A4\Map\TileUtility::getUuid($oTile->getX(), $oTile->getY());
		}

		$this->aTiles[$sUuid] = $oTile;
	}

	/**
	 * Create the array of map tiles
	 *
	 * @return \A4\Map\Map
	 */
	public function initializeTiles() {
		for($y = 1; $y <= $this->aSize['y']; $y++) {
			for($x = 1; $x <= $this->aSize['x']; $x++) {

				$sUuid = \A4\Map\TileUtility::getUuid($x, $y);
				$oTile = \A4\Factory::get(\A4\Map\Tile::class)
					->setUuid($sUuid)
					->setX($x)
					->setY($y);

				$this->addTile($oTile);
			}
		}

		return $this;
	}

	/**
	 * Return html code for rendert map
	 *
	 * @return string
	 */
	public function toHtml() {
		$aHtml = [];

		$aHtml[] = '<div class="map">';
		$aHtml[] = '<div class="map--tiles-container">';
		for($y = 1; $y <= $this->aSize['y']; $y++) {

			$aHtml[] = '<div class="map--tiles">';
			for($x = 1; $x <= $this->aSize['x']; $x++) {

				$sUuid 		= \A4\Map\TileUtility::getUuid($x, $y);
				$oTile 		= $this->getTile($sUuid);
				$aHtml[]	= $oTile->toHtml();

			}
			$aHtml[] = '</div>';
		}
		$aHtml[] = '</div>';
		$aHtml[] = '</div>';

		return implode("\n", $aHtml);
	}

	/**
	 * Render all tiles for the given size
	 *
	 * @return void
	 */
	public function render() {
		echo $this->toHtml();
	}
}
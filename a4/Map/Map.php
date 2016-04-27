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
	 * Render all tiles for the given size
	 *
	 * @return void
	 */
	public function render() {
		$aHtml = [];

		$aHtml[] = '<div class="map">';
		$aHtml[] = '<div class="map--tiles-container">';
		for($y = 1; $y <= $this->aSize['y']; $y++) {

			$aHtml[] = '<div class="map--tiles">';
			for($x = 1; $x <= $this->aSize['x']; $x++) {

				$aHtml[] = \A4\Factory::get(\A4\Map\Tile::class)
					->setX($x)
					->setY($y)
					->render();

			}
			$aHtml[] = '</div>';

		}
		$aHtml[] = '</div>';
		$aHtml[] = '</div>';

		echo implode("\n", $aHtml);
	}
}
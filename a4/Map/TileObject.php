<?php
namespace A4\Map;

class TileObject {

	/**
	 * Uuid of the tile
	 *
	 * @var string $sUuid
	 */
	protected $sUuid;

	/**
	 * Name of the object
	 *
	 * @var string $sName
	 * @todo passthru to \A4\Objects\Building
	 */
	protected $sName;

	/**
	 * Namespace of the object
	 *
	 * @var string $sNamespace
	 * @todo passthru to \A4\Objects\Building
	 */
	protected $sNamespace;

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->sName;
	}

	/**
	 * @param mixed $sName
	 * @return \A4\Map\TileObject
	 */
	public function setName($sName) {
		$this->sName = $sName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNamespace() {
		return $this->sNamespace;
	}

	/**
	 * @param string $sNamespace
	 * @return \A4\Map\TileObject
	 */
	public function setNamespace($sNamespace) {
		$this->sNamespace = $sNamespace;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUuid() {

		// @todo: Return a generated Uuid
		if(isset($this->sUuid) === false) {
			return md5($this->getNamespace());
		}

		return $this->sUuid;
	}

	/**
	 * @param string $sUuid
	 * @return \A4\Map\TileObject
	 */
	public function setUuid($sUuid) {
		$this->sUuid = $sUuid;
		return $this;
	}

	/**
	 * Render a tile object
	 *
	 * @return void
	 */
	public function toHtml() {
		return '<div class="map--tile-object object" data-uuid="' . $this->getUuid() . '">
			<div class="object--name">' . $this->getName() . '</div>
			<div class="object--namespace">' . $this->getNamespace() . '</div>
		</div>';
	}
}
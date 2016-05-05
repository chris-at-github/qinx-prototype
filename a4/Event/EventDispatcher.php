<?php
namespace A4\Event;

class EventDispatcher {

	/**
	 * List of event types
	 *
	 * @var array $aTypes
	 */
	protected $aTypes = [];

	/**
	 * @return array
	 */
	public function getTypes() {
		return $this->aTypes;
	}

	/**
	 * @param array $aTypes
	 * @return \A4\Event\EventDispatcher
	 */
	public function setTypes($aTypes) {
		$this->aTypes = $aTypes;
		return $this;
	}

	/**
	 * @param array $oEventType
	 * @return \A4\Event\EventDispatcher
	 */
	public function addType($oEventType) {
		$this->aTypes[] = $oEventType;
		return $this;
	}
}
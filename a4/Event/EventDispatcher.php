<?php
namespace A4\Event;

class EventDispatcher {

	/**
	 * List of event types
	 *
	 * @var array $aEvents
	 */
	protected $aEvents = [];

	/**
	 * @return array
	 */
	public function getEvents() {
		return $this->aEvents;
	}

	/**
	 * @param array $aEvents
	 * @return \A4\Event\EventDispatcher
	 */
	public function setTypes($aEvents) {
		$this->aEvents = $aEvents;
		return $this;
	}

	/**
	 * @param array $oEvent
	 * @return \A4\Event\EventDispatcher
	 */
	public function addEvent($oEvent) {
		$this->aEvents[] = $oEvent;
		return $this;
	}
}
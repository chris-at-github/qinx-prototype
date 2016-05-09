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
	 * Generate a key for an event name
	 *
	 * @param string $sEvent
	 * @return string
	 */
	public function getEventIdentifier($sEvent) {
		return md5($sEvent);
	}

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
	 * @param string $sEvent
	 * @return \A4\Event\EventDispatcher
	 */
	public function addEvent($sEvent) {
		$this->aEvents[] = $sEvent;
		return $this;
	}

	/**
	 * Execute a event
	 *
	 * @param $sEvent
	 * @param array $aArguments
	 */
	public function fire($sEvent, $aArguments = []) {

	}
}
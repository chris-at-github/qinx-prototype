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
	 * List of objects for each event
	 *
	 * @var array $aObjects
	 */
	protected $aObjects = [];

	/**
	 * Generate a key for an event name
	 *
	 * @param string $sEvent
	 * @return string
	 */
	public function getEventIdentifier($sEvent) {
		return md5(trim($sEvent, '\\ '));
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
		$this->aEvents[$this->getEventIdentifier($sEvent)] = $sEvent;
		return $this;
	}

	/**
	 * Execute a event
	 *
	 * @param $sEvent
	 * @param array $aArguments
	 */
	public function fire($sEvent, $aArguments = []) {
		$sEventIdentifier = $this->getEventIdentifier($sEvent);

		// Event type exists and objects registered for this event
		if(isset($this->aEvents[$sEventIdentifier]) === true && empty($this->aObjects[$sEventIdentifier]) === false) {
			\A4\Factory::get($this->aEvents[$sEventIdentifier])->handle($this->aObjects[$sEventIdentifier], $aArguments);
		}
	}
}
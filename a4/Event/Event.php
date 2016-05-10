<?php
namespace A4\Event;

/**
 * Basic Event Class
 * @package A4\Event
 */
class Event {

	/**
	 * event method name which called by the handle method on each object
	 *
	 * @var string $sEventMethod
	 */
	protected $sEventMethod;

	/**
	 * Returns the event method name
	 *
	 * @return string
	 */
	protected function getEventMethod() {
		return $this->sEventMethod;
	}
}
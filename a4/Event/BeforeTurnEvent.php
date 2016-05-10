<?php
namespace A4\Event;

class BeforeTurnEvent extends \A4\Event\Event implements \A4\Event\EventInterface {

	/**
	 * Execute the event method in each object
	 *
	 * @param array $aObjects
	 * @param array $aArguments
	 * @return void
	 */
	public function handle($aObjects, $aArguments = []) {
		$sEventMethod = $this->getEventMethod();

		foreach($aObjects as $oObject) {
			$oObject->{$sEventMethod}();
		}
	}
}
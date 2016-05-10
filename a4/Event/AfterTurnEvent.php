<?php
namespace A4\Event;

class AfterTurnEvent extends \A4\Event\Event implements \A4\Event\EventInterface {

	/**
	 * event method name which called by the handle method on each object
	 *
	 * @var string $sEventMethod
	 */
	protected $sEventMethod = 'onAfterTurn';

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
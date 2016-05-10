<?php
namespace A4\Event;

interface EventInterface {

	/**
	 * Execute the event method in each object
	 *
	 * @param array $aObjects
	 * @param array $aArguments
	 * @return void
	 */
	public function handle($aObjects, $aArguments = []);
}
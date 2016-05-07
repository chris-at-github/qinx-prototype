<?php
namespace A4;

class Request {

	/**
	 * low level getter for requests
	 *
	 * @param string $sKey
	 * @param mixed $mDefault;
	 * @return mixed
	 */
	public function get($sKey, $mDefault = null) {
		if(isset($_REQUEST[$sKey]) === true) {
			return $_REQUEST[$sKey];
		}

		return $mDefault;
	}
}
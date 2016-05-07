<?php
namespace A4;

interface ObjectInterface {

	/**
	 * Returns the Uuid
	 *
	 * @return string
	 */
	public function getUuid();

	/**
	 * Returns the name of the object
	 *
	 * @return string
	 */
	public function getName();
}
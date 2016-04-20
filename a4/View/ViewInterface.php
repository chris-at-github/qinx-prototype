<?php
namespace A4\View;

interface ViewInterface {

	/**
	 * Load the given page path and output the result to the browser
	 *
	 * @return void
	 */
	public function render();
}
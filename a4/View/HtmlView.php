<?php
namespace A4\View;

class HtmlView extends View implements ViewInterface {

	/**
	 * Output and render the given page as HTML
	 *
	 * @return void
	 */
	public function render() {
		echo '\A4\View\Html';
	}
}
<?php
namespace A4\Renderer;

class HtmlRenderer extends Renderer implements RendererInterface {

	/**
	 * Output and render the given page as HTML
	 *
	 * @return void
	 */
	public function render() {
		echo '\A4\View\Html';
	}
}
<?php
namespace A4\Renderer;

/**
 * Class HtmlRenderer
 * Render the page output as HTML
 *
 * @package A4\Renderer
 */
class HtmlRenderer extends Renderer implements RendererInterface {

	/**
	 * Output and render the given page as HTML
	 *
	 * @return void
	 */
	public function render() {
		echo $this->sSource;
	}
}
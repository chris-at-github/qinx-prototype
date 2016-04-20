<?php
namespace A4\Renderer;

interface RendererInterface {

	/**
	 * Load the given page path and output the result to the browser
	 *
	 * @return void
	 */
	public function render();
}
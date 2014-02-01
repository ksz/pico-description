<?php

/**
 * Pico Description plugin
 *
 * By using this plug-in, will be available from the theme page.description.
 *
 * @author maccotsan
 * @link https://github.com/ksz/pico-description
 * @license http://opensource.org/licenses/MIT
 * @version 0.1
 */
class Pico_Description {

	public function get_page_data(&$data, $page_meta) {
		$data['description'] = $page_meta['description'];
	}
}

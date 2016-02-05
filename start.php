<?php

/**
 * Dock
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */
elgg_register_event_handler('init', 'system', 'ui_dock_init');

/**
 * Initialize the plugin
 * @return void
 */
function ui_dock_init() {

	elgg_extend_view('elgg.css', 'page/elements/dock.css');
	elgg_extend_view('page/elements/footer', 'page/elements/dock');
	
}

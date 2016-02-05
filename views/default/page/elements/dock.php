<?php

$services = array(
	'facebook',
	'twitter',
	'youtube',
	'linkedin',
	'google-plus',
	'pinterest',
);

foreach ($services as $service) {
	if ($href = elgg_get_plugin_setting($service, 'ui_dock')) {
		elgg_register_menu_item('dock', array(
			'name' => $service,
			'text' => elgg_view_icon($service),
			'href' => $href,
		));
	}
}

$menu = elgg_view_menu('dock', array(
	'sort_by' => 'priority',
));

if (!$menu) {
	return;
}
?>

<div id="elgg-dock">
	<?php
	echo $menu;
	?>
</div>
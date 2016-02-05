<?php
$entity = elgg_extract('entity', $vars);

$services = array(
	'facebook',
	'twitter',
	'youtube',
	'linkedin',
	'google-plus',
	'pinterest',
);

foreach ($services as $service) {
	?>
	<div>
		<?php
		echo elgg_view_icon($service);
		echo elgg_view('input/url', array(
			'name' => "params[{$service}]",
			'value' => $entity->service,
		));
		?>
	</div>
	<?php
}
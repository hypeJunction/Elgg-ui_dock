Dock for Elgg
=============
![Elgg 2.0](https://img.shields.io/badge/Elgg-2.0.x-orange.svg?style=flat-square)

## Features

 * Responsive icon dock menu

![Dock](https://raw.github.com/hypeJunction/Elgg-ui_dock/master/screenshots/dock.png "Dock")

## Usage

 * In plugin settings, you can configure URLs for common social icons

 * To add a new item, just register a menu item for the `dock` menu:

```php
elgg_register_menu_item('dock', array(
	'name' => 'login',
	'text' => elgg_view_icon('lock'),
	'href' => 'login',
));
```
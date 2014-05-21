# PHP i18n with Gettext
This is a simple i18n library for PHP using gettext. Try it out!

## Requirements

* PHP 5.3+

## Setup

### 1. Put the code below into entry PHP script
```php
require_once("locale/bootstrap.php");
```
### 2. Edit configiguration file to match your need
`config.php`
```php
<?php
$config = array(
	'defaultLanguage'	=> 'en',
	'defaultDomain'		=> 'default',
	'availableDomains'	=> array(
		'common', 'default', 'pluralize'
	),
	'availableLanguages'	=> array('en', 'vi', 'fr'),
	'cookie'			=> array(
		'expire_at'		=> '+3 days',
		//'domain'		=> '',
		'path'			=> '/'
	)
);

return $config;
```

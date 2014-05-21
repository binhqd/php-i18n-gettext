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
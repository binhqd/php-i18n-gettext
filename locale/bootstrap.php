<?php
include("functions.php");
$config = require_once('locale/config.php');

$lang = $config['defaultLanguage'];

if (isset($_COOKIE['sitelang']) && in_array($_COOKIE['sitelang'], $config['availableLanguages'])) {
	$lang = $_COOKIE['sitelang'];
}

putenv("LANGUAGE={$lang}");

foreach ($config['availableDomains'] as $domain) {
	bindtextdomain($domain , realpath(dirname(__FILE__)) );
}

textdomain($config['defaultDomain']);


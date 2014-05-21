<?php
$referer = "";
if (isset($_SERVER['HTTP_REFERER']))
	$referer = $_SERVER['HTTP_REFERER'];

$config = require_once('config.php');

$lang = "";
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

if (!empty($lang) && in_array($lang, $config['availableLanguages'])) {
	$domain = "{$_SERVER['HTTP_HOST']}";
	if (!empty($config['cookie']['domain'])) {
		$domain = $config['cookie']['domain'];
	}
	
	setcookie('sitelang', $lang, strtotime($config['cookie']['expire_at']), $config['cookie']['path']);
	
	if (!empty($referer)) {
		header("Location: {$referer}");
	} else {
		header("Location: .");
	}
}
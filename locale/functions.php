<?php
function _parseLocaleParams($text, $params) {
	
	foreach ($params as $key => $val) {
		$text = str_replace($key, $val, $text);
	}
	
	return $text;
}
// ================================================================
function _common($msg, $params = array()) {
	$translate = dgettext("common", $msg);
	return _parseLocaleParams($translate, $params);
}

function _t($msg, $params = array()) {
	$translate = gettext($msg);
	return _parseLocaleParams($translate, $params);
}

function _p($singular, $plural, $n) {
	return dngettext("pluralize", $singular, $plural, $n);
}

function _tmz($msg, $params = array()) {
	$translate = dgettext("member_zone", $msg);
	return _parseLocaleParams($translate, $params);
}
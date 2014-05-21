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
### 3. Converting text
#### 3.1. Text in PHP scripts
```php
<?php
$msg = _t(“This is a message for translation”);
echo $msg;
```
#### 3.2. Text in HTML files
```html
<p>
	<span><?php echo _t(“This is a span text”);?></span>
</p>
```
### 4. Multi-language for images or static pages
#### 4.1. With images
```html
<img src=“/path/to/image/<?php echo _t(“banner.png”);?>”/>
```
#### 4.2. With static pages
```php
<h2><?php echo _t(“My CMS Page”);?></h2>
<?php include(_t(“cms_page.phtml”));?>
```
### 5. Translating with parameters
```php
<?php
$msg = _t(“This photo has {comments} {commentText}”, array(
	“{comments}”	=> $totalComments,
	“{commentText} => _p(“comment", “comments", $totalComments)
));
echo $msg;
```
If `$totalComments  = 5`, this will output:
`This photo has 5 comments`

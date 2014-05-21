<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<pre>
<?php
require_once("locale/bootstrap.php");

// xu ly doc database de lay ngon ngu: vi
if ($loggedUser)
	$lang = 'vi';
	putenv("LANGUAGE={$lang}");
}
?>
	
<?php echo _t("This is a demo message");?>
<?php include("file2.php");?>
<img src="/path/to/image/<?php echo _t("banner.png");?>"/>
<input type='button' value="<?php echo _t("Button");?>"/>
Switch to <a href='./lang/vi'>vi</a><br/>
Switch to <a href='./lang/en'>en</a><br/>
</body>
</html>
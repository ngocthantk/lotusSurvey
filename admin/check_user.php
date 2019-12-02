<?php
// PHP Survey
// https://www.netartmedia.net/php-survey
// Copyright (c) All Rights Reserved NetArt Media
// Find out more about our products and services on:
// https://www.netartmedia.net

?><?php
define("LOGIN_PAGE", "login.php");
define("SUCCESS_PAGE", "index.php");
define("LOGIN_EXPIRE_AFTER", 3 * 3600);


if((!isset($_COOKIE["AuthUser"]))||$_COOKIE["AuthUser"]=="")
{
	
	die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>");
}
else
{
	
	list($cookieUser,$cookiePassword,$cookieExpire)=explode("~",$_COOKIE["AuthUser"]);
	
	if($cookieExpire<time())
	{
		die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>");

	}
	else
	{
		$ini_array = parse_ini_file("../config.php",true);
		
		if
		(
			$cookiePassword!=$ini_array["login"]["admin_password"]
			||
			$cookieUser!=$ini_array["login"]["admin_user"]
		)
		{
			die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>");
		}
		
	}
}
?>
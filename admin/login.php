<?php
define("IN_SCRIPT","1");
error_reporting(0);
session_start();
include("../include/SiteManager.class.php");
$website = new SiteManager();
$website->LoadSettings();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="shortcut icon" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/login.js"></script>
	</head>  
<body>

<div class="page-header">
  <h1>Đăng nhập</h1>
</div>
<form id="main" style="margin-top:0px" action="login_action.php" method="post">
  <div class="group">
    <input name="username" required type="text" placeholder="Tên đăng nhập"></span><span class="bar"></span>
  </div>
  <div class="group">
    <input name="password" required type="password" placeholder="Mật khẩu"></span><span class="bar"></span>
  </div>
  <input type="submit" class="button buttonBlue" value="<?php echo $website->texts["login"];?>"/>
  </div>
  <div style="font-size: 14px; text-align: center;">
    <span>Chưa có tài khoản?<a href="register.php" style="text-decoration: none;"><strong style="color: #28a745">  Đăng ký</strong></a></span>
  <div>
  </form>
  </body>
</html>
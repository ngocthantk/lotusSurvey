<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Đăng ký</title>
    <link rel="shortcut icon" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/login.js"></script>
	</head>  
<body>

<div class="page-header"style="margin-top: -10px;">
  <h1>Đăng ký</h1>
</div>
<form id="main" style="margin-top:-8px" action="register_action.php" method="post">
  <div class="group">
    <input name="username" required type="text" placeholder="Tên đăng nhập"</span><span class="bar"></span>
  </div>
  <div class="group">
    <input name="email" required type="email" placeholder="Email"></span><span class="bar"></span>
  </div>
  <div class="group">
    <input name="name" required type="text" placeholder="Tên người dùng"></span><span class="bar"></span>
  </div>
  <div class="group">
    <input name="password" required type="password" placeholder="Mật khẩu"><span class="bar"></span>
  </div>
  <div class="group">
    <input name="repassword" required type="password" placeholder="Nhập lại mật khẩu"/span><span class="bar"></span>
  </div>
  <input type="submit" class="button buttonBlue" value="Đăng ký" name="register"/>
  <div style="font-size: 14px; text-align: center;">
    <span>Đã có tài khoản?<a href="login.php" style="text-decoration: none;"><strong style="color: #28a745">  Đăng nhập</strong></a></span>
  <div>
</form>

  </body>
</html>
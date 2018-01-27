<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>logout</title>
</head>
<?php
setcookie("user","",time()-24*3600);
$_COOKIE['user']


?>
<body>
<h4>You are logged out Sucessfully!!<br /> <a href="flamenco_reg.php">click here</a> to Login again!!!</h3>
</body>
</html>
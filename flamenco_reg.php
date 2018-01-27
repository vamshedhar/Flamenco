<?php
$con=mysql_connect('localhost','ayush89909_flame','tarang12');
mysql_select_db("ayush89909_flame",$con);

if(!$con)
{
	echo mysql_error();
}
if(isset($_POST["submit"]) && $_POST["pwd"]!="")
{
	$name=strip_tags(filter_var(mysql_real_escape_string($_POST['user']),FILTER_SANITIZE_STRING));
	$passhash = hash(sha256,$_POST['pwd']);
$test = mysql_query("SELECT * FROM admin WHERE user='$name'");
if(!$test){echo mysql_error();}
$check=mysql_fetch_array($test);
$queryhash =  hash(sha256,$check['pwd']);
if($queryhash == $passhash)
{
	$time=time()+24*3600;
setcookie("user",$name,$time);

 echo "<script type='text/javascript'>setTimeout(\"window.location = 'reg_details.php'\",0);</script>";


}
else
{
echo "<h2 align=\"right\">Wrong Login Details</h2>";	
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>admin</title>
</head>
<body background="stepup/images/pattern1.jpg">
<form  action="flamenco_reg.php" method="post">
<table align="right"><tr><td>
Username:<input type="text" name="user" /></td><td>Password:<input type="password" name="pwd" />
</td><td><input type="submit" name="submit" value="submit"/>
</td></tr></table>
</form>
</body>
</html>

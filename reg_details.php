<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

</head>
<?php if(isset($_COOKIE['user']))
{?>
<body background="stepup/images/pattern1.jpg">
<form action="reg_details.php" id="align" method="post">
<table align="center">
<tr><td><input type="submit"  value="stepup" name="stepup" /></td><td><input type="submit" name="panache" value="panache"/></td><td><input type="submit" name="logout" value="logout"/></td></tr>
</table>
<br /><br /><br />
</form>

<?php
$con=mysql_connect('localhost','ayush89909_flame','tarang12');
mysql_select_db("ayush89909_flame",$con);

if(isset($_POST['logout']))
{
	
	echo "<script type='text/javascript'>setTimeout(\"window.location = 'logout.php'\",0);</script>";	
	
}
if(isset($_POST['stepup']))
{
	?>
	<table border="1" cellspacing="0" cellpadding="5"  width="850" align="center">
<tr align="center" style=" font-weight:600 "><td>S.No</td><td>Name</td><td>No of Participants</td><td>Team Leader</td><td>Email-Id</td><td>City</td><td>Contact No</td><td>Video Links</td><td>Category</td></tr>
	<?php
$query=mysql_query("SELECT * FROM stepup");
$s=1;
while($query_array= mysql_fetch_array($query))
{?>
<tr align="center">
<td align="left" ><?php echo $s; ?></td>
<td align="left" ><?php echo $query_array['team_name'];  ?></td>
<td align="left" ><?php echo $query_array['no_of_people'];   ?></td>
<td align="left" ><?php  echo $query_array['team_leader'];    ?></td>
<td align="left" ><?php  echo $query_array['email'];  ?></td>
<td align="left" ><?php echo $query_array['city'];   ?></td>
<td align="left" ><?php echo $query_array['contact'];  ?></td>
<td align="left" > <?php echo $query_array['videolinks'];  ?>  </td>
<td align="left" > <?php echo $query_array['category'];  ?></td></tr>
<?php
$s++;}
?>
</table>

<?php }

if(isset($_POST['panache']))
{ 	?>
    <table cellpadding="5" border="1" cellspacing="0"  width="850px" align="center">
<tr align="center" style=" font-weight:600 "><td>S.No</td><td>Name</td><td>No of Participants</td><td>Team Leader</td><td>Email-Id</td><td>City</td><td>Contact No</td><td>Video Links</td></tr>

<?php
$query1=mysql_query("SELECT * FROM panache");	
$s1=1;
while($query_array1= mysql_fetch_array($query1))
{?>	
<tr align="center">
<td align="left" ><?php echo $s1; ?></td>
<td align="left" ><?php echo $query_array1['name'];  ?></td>
<td align="left" ><?php echo $query_array1['no'];   ?></td>
<td align="left" ><?php  echo $query_array1['leader'];    ?></td>
<td align="left" ><?php  echo $query_array1['email'];  ?></td>
<td align="left" ><?php echo $query_array1['city'];   ?></td>
<td align="left" ><?php echo $query_array1['contact'];  ?></td>
<td align="left" > <?php echo $query_array1['video'];  ?>  </td></tr>
<?php
$s1++;}?>	

</table>
<?php }

}
else
{ echo "you arent logged in plz login <a href=\"flamenco_reg.php\" >here</a>";}

?>
</body>
</html>
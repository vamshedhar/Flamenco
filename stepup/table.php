<?php
$con=mysql_connect('localhost','ayush89909_flame','tarang12');
mysql_select_db("ayush89909_flame",$con);
if(isset($_POST['submit']) && $_POST['category']==""){echo "Select category!!!<br>"."<a href='1.php'>back</a>";}

if(isset($_POST['submit']) && $_POST['category']!="")
{
$name=$_POST["teamname"];
$count=$_POST["noofpeople"];
$leader=$_POST["teamleader"];
$email=$_POST["emailid"];
$city=$_POST["city"];
$contact=$_POST["contactno"];
$video=$_POST["videolinks"];
$category=$_POST["category"];
$test=mysql_query("INSERT INTO stepup (team_name, no_of_people, team_leader, email, city, contact, videolinks, category) 
VALUES ('$name', '$count', '$leader', '$email', '$city', '$contact', '$video', '$category')");
?>
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<style type="text/css">
#form
{
	
font-family: 'Kotta One', serif;
	font-size:18px;
}
h3
{
font-family: 'Rancho', cursive;	
}
</style>

<?php 
if(!$test)
{ echo mysql_error();
}
else{
?>
<br/>
<h3>YOUR REGISTRATION HAS BEEN SUCESSFUL</h3>
<h3>YOUR DETAILS ARE :</h3><br/>
<table id="form"  cellpadding="7px" border="0px" cellspacing="2px" width="500px" align="center">
<tr align="center"><td > TEAM NAME :</td><td align="left" ><?php echo $name;  ?></td></tr>
<tr align="center"><td  >NO OF PEOPLE :</td><td align="left" ><?php echo $count;   ?></td></tr>
<tr align="center"><td  >TEAM LEADER :</td><td align="left" ><?php  echo $leader;    ?></td></tr>
<tr align="center"><td >EMAIL ID :</td><td align="left" ><?php  echo $email;  ?></td></tr>
<tr align="center"><td  >CITY :</td><td align="left" ><?php echo $city;   ?></td></tr>
<tr align="center"><td >CONACT NO :</td><td align="left" ><?php echo $contact;  ?></td></tr>
<tr align="center"><td>VIDEO LINKS :</td><td align="left" > <?php echo $video;  ?>  </td></tr>
<tr align="center"><td >CATEGORY :</td><td align="left" > <?php echo $category;  ?></td></tr>
</table><br/>
<h3 align="center">THANK YOU FOR REGISTERING IN STEPUP 12</h3>
<?php
}

}
?>

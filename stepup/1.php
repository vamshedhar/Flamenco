<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<script type="text/javascript">
// JavaScript Document

function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<style type="text/css">
#form td
{
	font-family: 'Kotta One', serif;
	font-size:18px;}
	h1
{
	font-family: 'Rancho', cursive;}
</style>
</head>

<body><h1 align="center">REGISTER</h1>
<br />
<table id="form" border="0px" cellpadding="10" cellspacing="10" width="500px" align="center">
<form action="table.php" method="post" name="reg" onsubmit="MM_validateForm('name','','R','no','','RisNum','leader','','R','email','','RisEmail','city','','R','contact','','RisNum');return document.MM_returnValue">

<tr><td align="right"  >Team Name :</td><td align="center"><input type="text" name="teamname" id="name" /></td></tr>
<tr><td align="right"  >No of People :</td><td align="center"><input type="text" name="noofpeople" id="no" /></td></tr>
<tr><td align="right" >Team Leader :</td><td align="center"><input type="text" name="teamleader"  id="leader"/></td></tr>
<tr><td align="right" >Email ID :</td><td align="center"><input type="text" name="emailid"  id="email"/></td></tr>
<tr><td align="right"  >City :</td><td align="center"><input type="text" name="city" id="city" /></td></tr>
<tr><td align="right" >Contact No. :</td><td align="center"><input type="text" name="contactno" id="contact"/></td></tr>
<tr><td align="right" >Video Links :</td><td align="center"><input type="text" name="videolinks"  id="video"/></td></tr>
<tr><td align="right"  >Category :</td><td align="center"><select name="category">
<option id="category" value="">Select Category</option>
<option value="Solo">Solo</option>
<option value="Group">Group</option>
<option value="Duet">Duet</option>


</select></td></tr>
<tr>
  <td   colspan="2" align="center"><input type="submit" name="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;" /></td></tr>



</form></table>
</body>
</html>
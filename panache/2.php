<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<style type="text/css">
#form td
{
	font-family: 'Kotta One', serif;
	font-size:18px;}
	h1
{
	font-family: 'Rancho', cursive;}
	</style>
<script type="text/javascript">
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
</head>

<body>
<h1 align="center">REGISTER</h1>
<br/>
<table id="form" border="0px" cellpadding="10" cellspacing="10" width="500px" align="center">
<form action="table.php" method="post" onsubmit="MM_validateForm('teamname','','R','noofpeople','','RisNum','teamleader','','R','emailid','','RisEmail','city','','R','contactno','','RisNum');return document.MM_returnValue">
<tr><td align="center">Team name</td><td align="center"><input name="teamname" type="text" id="teamname" /></td></tr>
<tr><td align="center">No of people</td><td align="center"><input name="noofpeople" type="text" id="noofpeople" /></td></tr>
<tr><td align="center">Team leader</td><td align="center"><input name="teamleader" type="text" id="teamleader" /></td></tr>
<tr><td align="center">email id</td><td align="center"><input name="emailid" type="text" id="emailid" /></td></tr>
<tr><td align="center">city</td><td align="center"><input name="city" type="text" id="city" /></td></tr>
<tr><td align="center">contact no</td><td align="center"><input name="contactno" type="text" id="contactno" /></td></tr>
<tr><td align="center">video links</td><td align="center"><input type="text" name="videolinks" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit" /></td></tr>



</form></table>
</body>
</html>
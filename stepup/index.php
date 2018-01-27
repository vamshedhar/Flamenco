<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StepUp12</title>
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="colorbox.css" type="text/css" />
<link rel="stylesheet" href="stepup.css" type="text/css"/>
<script src="colorbox/jquery1.7.1.js"></script>
		<script src="colorbox/jquery.colorbox.js"></script>
		<script>
		$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"570", height:"630"});
				$(".inline").colorbox({inline:true, width:"570"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

</head>

<body background="../images/stepup1366.jpg">

<div id="button1">
<a class='inline' href="#info"><img src="buttons/stepup.png" border="0"/></a>
</div>

<div id="button2">
<a class='inline' href="#rules"><img src="buttons/rules.png" border="0"/></a>
</div>

<div id="button3">
<a class='inline' href="#prizes" style="margin-top:175px"><img src="buttons/prizes.png" border="0"/></a>
</div>

<div id="button4">
<a class='iframe' href="1.php"><img src="buttons/registration.png" border="0"/></a>
</div>

<div id="button5">
<a class='inline' href="#contact"><img src="buttons/dialus.png" border="0"/></a>
</div>


<div id="venue">

<h1>Pink Square Mall JAIPUR</h1>
<h1>February 12, 2012</h1>
</div>



<div style="display:none">
<div id="prizes" style=" padding:20px">
<h1 align="center">PRIZES</h1>
<ul>
<li>First five teams are to be participated in TARANG IITR Finals</li><br/>
<li>A chance to get into Music Video</li><br/>
<li>Free dance training vochures for first three teams for one month</li><br/>
<li>Prizes worth rupees 30000</li><br/>
<li>IIT ROORKEE certificate for participation and merit</li><br/>
</ul></div></div>
<div style="display:none">
<div id="info" style="padding:20px">
<h1 align="center">About STEP UP</h1>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If  you think you can dance then Step-Up in the arena & take the crowd by passion & frenzy. Pink Square Mall plays host to one of the biggest dance extravaganzas of North India. Groove to the beat & feel the thundering roars of the crowd with music blaring above them. Show us what you are made of & lock us with your charm & break the stage with your moves till our eyes pop out. If you are up to the challenge & got what it takes to get us hooked then Step-Up'12 is here for you.<br /><br /><br />
<table width="500px" height="100px" align="center" >
<tr><td>EVENT</td><td>SOLO</td><td>DUET</td><td>GROUP</td></tr>
<tr><td>REGISTRATION FEE</td><td>100 Rs</td><td>200 Rs</td><td>500 Rs</td></tr>
<tr><td colspan="4" align="center"><br /><br />
Event Timings:<br />
Solo & Duet - 2pm to 4pm<br />
Group Dance - 4pm to 6pm



</td></tr>
</table>

</div></div>
<div style="display:none">
<div id="rules" style="padding:20px">
<h1 align="center">RULES AND REGULATIONS</h1>
<ul>
<li>Usage of props is allowed . These have to be brought by the teams themselves(no extra marks for props)</li><br/>
<li>However , the organizers reserve the right to disallow certain props at their discretion.</li><br/>
<li>Teams should have 4-16 participants on stage.</li><br/>
<li>Two team members must be present to provide cues for music and lights.</li><br/>
<li>Teams are requested to confirm their participation in advance by registering on<a href="www.flamenco.net"> www.flamenco.net </a>.</li><br/>
<li>Teams must bring audio track in pen drives.</li><br/>
<li>Teams might be penalized by judges for exceeding time limit.</li><br/>
<li>Any kind of fluid or flame is not allowed on stage.</li><br/>
<li>Obscenity of any kind will lead to immediate disqualification</li><br/>
<li>Weightage for costumes , choreography ,expressions ,co-ordination and use of stage.</li><br/>
<li>ALL FORMS OF DANCE ALLOWED.</li><br/>
<li>In case of situations which have been not described in rules decision taken by judges will be final.</li><br/>
<li>Registrations first come first basis.</li><br/>
<li>TIME LIMIT:    Solo: 3-5 mins,       Duet: 4-5 mins,         Group: 5-8 mins</li><br/>
</ul>
</div></div>
<div style="display:none;">
  <div id="contact" style="padding:20px" align="center">
<h1 align="center">CONTACT US</h1>
<br/><br/><br/><br/><br/>
ADAM - 07830931567
<br/><br/>
RAVI KIRAN - 09412847884
<br/><br/>
VIRAAT - 09045941533
<br/><br/>
Mail-Us at : stepup.iitr@gmail.com
</div></div>
</body>
</html>
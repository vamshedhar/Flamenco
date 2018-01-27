<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>panache</title>
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="colorbox.css" type="text/css" />
<link rel="stylesheet" href="panache.css" type="text/css" />

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
				$(".iframe").colorbox({iframe:true, width:"570px", height:"630"});
				$(".inline").colorbox({inline:true, width:"570px"});
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

<body background="images2/bg.jpg">


<div id="button1">
<a class='inline' href="#info"><img src="buttons/About.png" border="0" onmouseover="this.src='buttons/Aboutglow.png'" onmouseout="this.src='buttons/About.png'" /></a>
</div>
<div id="button2">
<a class='inline' href="#events"><img src="buttons/eventdetails.png" border="0" onmouseover="this.src='buttons/eventdetailsglow.png'" onmouseout="this.src='buttons/eventdetails.png'" /></a>
</div>
<div id="button3">
<a class='inline' href="#rules"><img src="buttons/rules.png" border="0" onmouseover="this.src='buttons/rulesglow.png'" onmouseout="this.src='buttons/rules.png'" /></a>
</div>
<div id="button4">
<a class='inline' href="#incentives"><img src="buttons/incentives.png" border="0" onmouseover="this.src='buttons/incentivesglow.png'" onmouseout="this.src='buttons/incentives.png'" /></a>
</div>
<div id="button5">
<a class='iframe' href="2.php"><img src="buttons/register.png" border="0" onmouseover="this.src='buttons/registerglow.png'" onmouseout="this.src='buttons/register.png'" /></a>
</div>
<div id="button6">
<a class='inline' href="#contact"><img src="buttons/dial.png" border="0" onmouseover="this.src='buttons/dialglow.png'" onmouseout="this.src='buttons/dial.png'" /></a>
</div>










<div style='display:none'>
			<div id='incentives' style='padding:10px;'>
			<h1 align="center">INCENTIVES</h1><br />
            <ul>
            <li>
           Winning team will get direct entry at Tarang’12 IIT Roorkee Finals.
            </li><br />
            <li>
          It will also get the travelling charges for coming to Roorkee .
            </li><br />
            <li>
          IIT ROORKEE certificate of participation and merit.
            </li><br />
            <li>
          Prizes worth rupees 30000, goodies, invaluable designer clothes and many more
            </li><br />
            <li>
          Best male and female model of the final event scheduled to occur at IITR will get an oppurtinity to do an intern at a prestigious modelling agency. 
            </li>
           
            </ul>
			</div>
		</div>

<div style="display:none">
<div id="home" style="padding:20px">
<h1 align="center">ABOUT PANACHE 12</h1>
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The noise of hundreds of cheering fans almost fag out 
all other sounds as models take to the stage to prove 
that they do have what it takes and more besides!!
With the ramp set on fire, with young men and women dying
to show off their panache, one has in one's hand 
an event that is simply 'hot'. The event is bound
to have participants of certain fashion weeks
from metros like Delhi and Chandigarh
and has already generated immense
vogue and craze among
the youth.

</ul>
</div></div>
<div style="display:none">
<div id="info" style="padding:20px">
<h1 align="center">About Panache</h1>
<ul>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panache is a Model Hunt conducted by Pink Square Mall JAIPUR 
 and promises to be one of the largest Model Hunt 
of Northern India and is coming to dazzle the Pink Square on
12th Feb. Fashion parade, the name sparks imaginations,
generates a visual scene of excitement and cheering for 
the teams as they strut their stuff. The teams too, hearts 
gladdened by the applause, take it upon themselves
to make things bigger and better than ever.
Panache, in itself is quite a big 
one as it attracts the crowds 
from Delhi and NCR Regions.
</ul>
</div></div>
<div style="display:none">
<div id="rules" style="padding:10px">
<h1 align="center">RULES</h1>
<ul>
<li>

The theme of the fashion parade should not be against any religious and cultural sentiments.</li><br/><li>
Moreover, the results declared by the judges will be final and the organizers  will not entertain any sort of appeals against the results. Teams should have minimum of 10 participants on stage.</li><br/><li>
Two team members must be present to provide cues for music and lights.</li><br/><li>
Teams are requested to confirm their participation in advance by registering on <a href="www.flamenco.net"> www.flamenco.net </a>.</li><br/><li>
Teams must bring audio track in pen drives.</li><br/><li>
Teams might be penalized by judges for exceeding time limit.</li><br/><li>
Any kind of fluid or flame is not allowed on stage.</li><br/><li>
Obscenity of any kind will not be tolerable.</li><br/><li>
It is advisable to all the participants to show the organizers their costumes well before the show begins.</li><br/><li>
In case of situations which have been not described in rules decision taken by judges will be final.</li><br/><li>
Registrations first come first basis.</li><br/><li style=" font-weight:500;">
TIME LIMIT:    10 min</li><br/>
</li>
</ul></div></div>
<div style="display:none">
<div align="center" id="contact" style="padding:10px">
<h1 align="center">CONTACT US</h1>
<br/><br/><br/><br/><br/>
SATYA PRAKASH - 09759750309
<br/><br/>
MANISH SINGH - 09675982689<br/><br/>
OR MailUs at : panachetarangiitr2012@gmail.com
</div></div>
<div style="display:none">
<div id="events" style="padding:10px">
<h1 align="center">EVENT DETAILS</h1>

<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
This mega model hunt, having a footfall of around 1000 provides
a total slot of 3 hours for its participating friends. Each team, 
having a total strength of maximum 15 members will be given a
total slot of 15 mins to show their quality in front of our judges.
Each team should bring its own props and music cds and 
the theme presentedby them should not involve 
anything anti-social and presence of any threatening 
objects like fire etc. and the participants 
should carry a valid ID of their college.
<br /><br />
<table align="center">
<tr><td>Venue :</td><td>Pink Square Mall JAIPUR</td></tr>
<tr><td>Date :</td><td>February 12, 2012</td></tr>
<tr><td>Timings :</td><td>6:30pm to 9:30pm</td></tr>
</table>
</ul>
</div></div>
</body>
</html>
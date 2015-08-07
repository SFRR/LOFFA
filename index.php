<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php include './utils/nextMeetings.php'; ?>

<head>
	
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico"></link>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<!-- jQuery library (served from Google) -->
<script type="text/javascript" src="./javascript/jquery.js"></script>
<!-- bxSlider Javascript file -->
<script type="text/javascript" src="./javascript/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="./css/jquery.bxslider.css" rel="stylesheet" />

<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link href="./css/navigation.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="./javascript/setActive.js"></script> 

<title>LOFFA - Laois Offaly Families For Autism</title>

</head>

<body onload="ChangeActive('home'); " onclick="slider.startShow();">
<div id="container">
	<div id="header_img">
		<div id="header">
				<!-- <div id="leftside_banner" onclick="window.open('http://google.com', '_blank');"></div> -->
				<div id="leftside_banner" onclick="location.href='./';"></div>
				<!-- or -->
				<!-- <div id="leftside_banner" onclick="window.location.reload();"></div>
				
				<!-- <div id="rightside_banner">	
					<a target="_blank" href="http://www.facebook.com/people/Loffa-Ireland/100000672384967" title="Follow us on Facebook">
					<img src="./images/donate.png" border="0" alt="Follow us on Facebook" /></a>
				</div> -->
		
		<div id="navcontainer">
			<ul id="navlist">
				<li><a id="home" href="javascript:void(0);"onclick="window.location.reload();"><span>Home</span></a>
				<li><a id="events" href="javascript:void(0);"onclick="getWebpage('./content/events.php');" href="#"><span>Events</span></a></li>
				<li><a id="web_links" href="javascript:void(0);"onclick="getWebpage('./content/webLinks.html');" href="#"><span>Web Links</span></a></li>
				<li><a id="faq" href="javascript:void(0);"onclick="getWebpage('./content/faq.html'); " href="#"><span>FAQ</span></a></li>
				<li><a id="assistance_dogs" href="javascript:void(0);"onclick="getWebpage('./content/dogs.html');" href="#"><span>Assistance Dogs</span></a></li>
				<li><a id="contacts" href="javascript:void(0);"onclick="getWebpage('./content/contacts.html');" href="#"><span>Contacts</span></a></li>
				
			</ul>
		</div>
		</div>
	</div>

	<ul class="bxslider">
		<li><img src="./images/Dog_Image.jpg" title=""/></li>
		<li><img src="./images/Coffee_Image.jpg"title="" /></li>
		<li><img src="./images/Play_Dates_Image.jpg"title="<?php getBannerTullamoreOrPortlaoisePlaydateAndBowlingInformtion();?>" /></li>
	</ul>

	<script type="text/javascript">
		$('.bxslider').bxSlider({
			mode: 'fade',
			captions: true,
			auto: true
		});
    </script>
	
	<div id="content">
		<div id="left">
		
			<h1>Welcome to LOFFA</h1>
	<p>Laois Offaly Families for Autism is a local support group by parents for parents and families of children and adults with Autism Spectrum Disorder (ASD).</p>
	<p>We actively campaign to raise awareness of autism in our area and seek health, educational and support services that are appropriate to meet the needs of 
	our children and adults with Autism.
	</p>
	<p>Our group provides subsidised access to private a Speech & Language Therapist, Occupational Therapist and Art Therapist for those families who are forced, 
	through lack of services from the HSE to obtain private therapies for their children.   
	</p>
	<p>In addition, we also run Junior Play dates, 10 Pin Bowling sessions and Art & Drama Groups for our children and their siblings to give them the opportunity 
	to meet and socialise with other children like themselves.
	</p>
	<p>We currently run a monthly Autism Friendly Cinema Club, venues alternating between <a target="_blank" href="http://www.odeoncinemas.ie/cinemas/portlaoise/203/">
	Odeon Cinema in Portlaoise</a> and <a target="_blank" href="http://www.imccinemas.ie/home.asp?idcinema=23">Tullamore IMC (formally Omniplex).</a>
	</p>
	<p>Our group comes under the umbrella of the <a target="_blank" title="IAA website" href="http://www.autismireland.ie">Irish Autism Action </a> (IAA), we have been 
	in existence since 2001 and currently support over 250 families but our membership in the Laois and Offaly areas continues to rise.
	</p>
	<p>Meetings are held on the <b>1<sup>st</sup> Tuesday</b> of every month alternating between <a target="_blank" title="Tullamore Court Hotel Website" href="http://www.tullamorecourthotel.ie/location">
	Tullamore Court Hotel</a> and <a target="_blank" title="The Heritage Hotel Portlaoise Website" href="http://www.theheritagehotel.com">The Heritage Hotel</a> Portlaoise.
	</p>
	
	
	<table>
		<tr>
			<th colspan="3"> <p align="center">LOFFA publications</p> </th>
		</tr>
		<tr>
			<td><p>LOFFA 2011 Report on Profile of Members Needs & Service Provision</p>
			<a target="_blank" title="LOFFA 2011 Report on Profile of Members Needs & Service Provision" href="./files/LOFFA_2011_Report_on_Profile_of_Members_Needs_&_Service_Provision.pdf" > 
			<img src="./images/Adobe_PDF_icon.png" alt="LOFFA 2011 Report on Profile of Members Needs & Service Provision" border="0"/> 
			</a></td>
			<td><p>LOFFA 2013 Report on Service Provision</p>
			<a target="_blank" title="LOFFA 2013 Report on Service Provision" href="./files/LOFFA_2013_Report_on_Service_Provision.pdf" > 
			<img src="./images/Adobe_PDF_icon.png" alt="LOFFA 2013 Report on Service Provision" border="0"/> 
			</a></td>
			<td><p>The Current State of HSE Autism Services in Laois/Offaly</p>
			<a target="_blank" title="The Current State of HSE Autism Services in Laois/Offaly" href="./files/Autism_Services_in_LaoisOffaly.pdf" > 
			<img src="./images/Adobe_PDF_icon.png" alt="The Current State of HSE Autism Services in Laois/Offaly" border="0"/> 
			</a></td>
		</tr>
	</table>
	
		</div>
			
		<div id="right">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FLaoisOffalyFamiliesforAutism&amp;width&amp;height=427&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:427px;" allowTransparency="true"></iframe>
			<br></br>
			
			<div style="text-align: center;">
				<iframe frameborder="0" height="315" src="http://www.youtube.com/embed/R5V8qLqLXbQ" width="auto"></iframe>
			</div>
			
		</div>
		
		
		<div id="footerline">
			<div id="footer">Copyright &copy; <?php echo date("Y"); ?> LOFFA - Laois Offaly Families For Autism.  All rights reserved.</div>
		</div>
	</div>		
</div>

</body>
</html>

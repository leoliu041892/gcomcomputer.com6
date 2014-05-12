<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="not-ie no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml"><!-- <![endif] --><head>
	<title>
        Gcom Computer - Edmonton Best Used Computers Store, Phones, Laptops, Repair Service, IT Support
    </title>
    <meta name="Description" content="We provide:Laoptops, Desktops, Phone, Hardware Upgrades, Laptop/PC Repair/Mac Repair, CellphoneScreen Replacement, Software Installations, IT Support And Free Estimate!"/>
    <meta name="Keywords" content="Computer, Edmonton, Computer Store, Computer Repair Store, Computer Sales, Used Computer, Used Laptops,Service, Computer Service, Phone, iPhone, Onsite Repair, Onsite Service, Computer Repair, Computer Parts, Computer Cables, HDMI Cables, DVI Cables,Display Port Cables, Computer Services, Tablet, Printer, SSD, Retail, LCD, LED, Monitor, Hard Drive, CPU, Processor, Sound card, Networking, Network, Wireless, Speaker, Headset, Security">
    <meta name="Copyright" content="Copyright @2014 Gcom Computer, Ltd. All Right Reserved."/>
	<meta name="Author" content="Qianyu Liu & Chao Li"/>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
    <meta name="google-site-verification" content="hGh9QdobmvBXkAbm4y1WTeLuLAnklSK-jq98yIyn_sQ"/>
	<link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize" rel="stylesheet" type="text/css"/>
    <link rel="canonical" href="http://www.gcomcomputer.com/">
    <!base href="http:/www.gcomcomputer.com/index.php">
	<link rel="shortcut" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" media="screen"/>
	<link rel="stylesheet" href="css/skeleton.css" media="screen"/>
	<link rel="stylesheet" href="sliders/flexslider/flexslider.css" media="screen"/>
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen"/>

	<!--  HTML5 Shiv + detect touch events  -->
	<script type="text/javascript" src="js/modernizr.custom.js" style=""></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><script type="text/javascript" charset="UTF-8" src="http://maps.gstatic.com/cat_js/intl/en_us/mapfiles/api-3/16/5/%7Bcommon,util,geocoder%7D.js"></script></head>
<body class="menu-1 h-style-1 text-1">

<div class="wrap">
					<?php
		include("mysql_connect.php");
    ?>	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	
	<header id="header" class="clearfix">
		
		<a itemscope itemtype="http://schema.org/LocalBusiness" itemref="_address2 _openingHoursSpecification4 _email14 _telephone15" href="index.php" id="logo"><img src="images/logo.png" alt="Gcom Computer"/>
<meta id="_name17" itemprop="name" content="[Gcom Computer]"></a>
        
		
		<div class="widget-container widget_search">
			<div style="display: none;">We provide:Laoptops, Desktops, Phone, Hardware Upgrades, Laptop/PC Repair/Mac Repair, CellphoneScreen Replacement, Software Installations, IT Support And Free Estimate!</div>
			
			<span id="_address2" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="adds">(Main)<b>West End Store</b><br/> 
<span itemprop="streetAddress">#100 10524-178st,</span> 
<span itemprop="addressLocality">Edmonton</span>, 
<span itemprop="addressRegion">AB</span>, 
<span itemprop="postalCode">T5S 2J1</span></span><br/>
			<span id="_telephone15" itemprop="telephone" class="call"><span>(780)</span> 757-6828</span><br/>
			
<span itemscope itemtype="http://schema.org/LocalBusiness" itemref="_name17 _openingHoursSpecification4 _email14"><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="adds"><b>Downtown Store</b><br/>
<span itemprop="streetAddress">10932-97st,</span> 
<span itemprop="addressLocality">Edmonton</span>, 
<span itemprop="addressRegion">AB</span>, 
<span itemprop="postalCode">T5H 2M9</span></span><br/>
         <span itemprop="telephone" class="call"><span>(780)</span> 756-6828</span></span><br/>

			<!--<form action="#" id="searchform" method="get" />

				<p>
					<input type="text" id="s" placeholder="Search" />
					<button type="submit" id="searchsubmit"></button>
				</p>

			</form><!--/ #searchform-->

		</div><!--/ .widget-container-->		
		
			<nav id="navigation" class="navigation">
			
							<ul>
				<li class="current-menu-item"><a href="index.php">Home</a></li>
				<li><a href="GCOM-All-Computers.php">Laptop / Desktop</a>
					
				</li>
			<li>
			   	<a href="GCOM-Cellphone-Tablet.php">Cellphone / Tablet</a>
					<ul>
						<li><a href="GCOM-Cellphone-Tablet.php?category=Phone">Cellphone</a></li>
						<li><a href="GCOM-Cellphone-Tablet.php?category=pad">Tablet</a></li>
						<li><a href="GCOM-Cellphone-Tablet.php?category=accesory">Accessories</a></li>
					</ul>
				</li>
				<li><a href="GCOM-Computer-Assesory-Part.php">Accessory / Part</a></li>
				<li><a href="GCOM-Service.html">Services</a>
				
				</li>
				<li><a href="GCOM-Contact-Us.php">Contact Us</a></li>
			</ul>
			
		</nav><!--/ #navigation-->
		
		
	</header><!--/ #header-->
	

	
	
	<!-- - - - - - - - - - - - - - Top Panel - - - - - - - - - - - - - - - - -->	
	
	<div class="top-panel clearfix">
		
		<!-- - - - - - - - - - - Slider - - - - - - - - - - - - - -->	

		<div id="slider" class="flexslider clearfix">

			<ul class="slides">
<?php 

   $result = mysql_query("SELECT * FROM gcom ORDER BY RAND() LIMIT 5") or die(mysql_error());	
	while($row = mysql_fetch_array($result))
		{
			$Listid = $row['Id'];
			$brand = $row['brand'];
			$year = $row['year'];
			$type = $row['type'];
			$model = $row['model'];
			$cpu = $row['cpu'];
			$cpumodel = $row['cpumodel'];
			$cpuspeed = $row['cpuspeed'];
			$gcard = $row['gcard'];
			$gcardmodel = $row['gcardmodel'];
			$ram = $row['ram'];
			$size = $row['size'];
			$HardDrive = $row['HardDrive'];
			$HDType = $row['HDType'];
			$OS = $row['OS'];
			$OSversion = $row['OSversion'];
			$Listimage = $row['Pic'];
			$DisplayOutput = $row['DisplayOutput'];
			$DVDdrive = $row['DVDdrive'];
            $webcam = $row['webcam'];
            $wifi = $row['wifi'];
            $lan = $row['lan'];
            $OS = $row['OS'];
            $OSversion = $row['OSversion'];
            $SystemType = $row['SystemType'];
    	    $avaliablility = $row['avaliablility'];
    	    $sellingprice = $row['sellingprice'];
    	    $soldprice = $row['soldprice'];


if($avaliablility =="Sold"){echo "<li style=\"display:none;\">";}else{

echo "<li>";}
echo "<img src=\"$Listimage\" alt=\"\"/><br/> ";
echo "<div class=\"caption\">";
echo "<div class=\"caption-entry\">";
echo "<dl class=\"auto-detailed clearfix\">";
echo "<dt><span class=\"model\">$brand&nbsp$model</span></dt>";
echo "<dd class=\"heading\"><b>$year&nbsp$size\"&nbsp$type</b></dd>";
 if($avaliablility =="Damaged")
{echo "<dd class=\"heading\"><b>Damaged</b></dd>";}
 if($avaliablility =="WestEndStore")
{echo "<dd class=\"heading\"><b>WestEndStore</b></dd>";}
 if($avaliablility =="DowntownStore")
{echo "<dd class=\"heading\"><b>DowntownStore</b></dd>";}
 if($avaliablility =="Sold")
{echo "<dd class=\"heading\"><b>Sold</b></dd>";echo "<dd><span class=\"heading\">Sold@$$soldprice</dd>";}
 else{echo "<dd><span class=\"heading\">Selling@$$sellingprice</dd>";}
echo "</dl>";
echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"button orange\">Details &raquo;</a>";
echo "</div>";
echo "</div>";
echo "</li>";
}
?>

			</ul><!--/ .slides-->

		</div><!--/ #slider-->

		<!-- - - - - - - - - - - end Slider - - - - - - - - - - - - - -->
		
		<!-- - - - - - - - - - - Search Panel - - - - - - - - - - - - - -->
		
		<div class="widget_custom_search">
			
			<h3 class="widget-title">Search</h3>
			
			<form method="get" action="search.php?"id="boxpanel" class="form-panel" />
				
				<fieldset>
					<label for="manufacturer">Brand:</label>
					<select id="manufacturer" name="Brand">
					<option value="Asus">Asus</option>
					<option value="Acer">Acer</option>
					<option value="Lenovo">Lenovo</option>
					<option value="Toshiba">Toshiba</option>
					<option value="Dell">Dell</option>
					<option value="HP">HP</option>
					<option value="Apple">Apple</option>
					<option value="Sony">Sony</option>
					<option value="MSI">MSI</option>
					<option value="Sony">Sony</option>
					<option value="Gateway">Gateway</option>
					<option value="Thinkpad">Thinkpad</option>
					<option value="LG">LG</option>

					</select>
				</fieldset>
				<fieldset>
					<label for="maxprice">Max Price:</label>
              <input id="maxprice" type="text" name="maxprice" placeholder="Maximum Price" value="2000"  /></p>
				</fieldset>
				<fieldset>
					<label for="minprice">Min Price:</label>
					<input id="minprice" type="text" name="minprice" placeholder="Minium Price" value="0"  /></p>
				</fieldset>
				
				
				<fieldset>
					<label for="bodytype">Type:</label>
					<select id="bodytype" name="type">
					<option value="Laptop">Laptop</option>
					<option value="Desktop">Desktop</option>
					<option value="Phone">Phone</option>
					<option value="Accessories">Accessories</option>
					</select>
				</fieldset>
				
				<div class="clear"></div>
				<button id="submitSearch" class="submit-search" type="submit">Search</button>
				
			</form><!--/ .form-panel-->
			<?php 
$brandsearch = $_GET['Brand'];
$min = $_GET['minprice'];
$max = $_GET['maxprice'];
$typesearch = $_GET['type'];




			?>
		</div><!--/ .main-search-panel-->
		
		<!-- - - - - - - - - - end Search Panel - - - - - - - - - - - - -->
		
	</div><!--/ .top-panel-->
	
	<!-- - - - - - - - - - - - - end Top Panel - - - - - - - - - - - - - - - -->	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container sbr clearfix">

			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->	



			<section id="content" class="twelve columns">
				
				<div class="recent-list-computers">
					
					<h3 class="widget-title">Recent Items</h3>

					<ul class="clearfix">
                        
                 


<?php 

   $result = mysql_query("SELECT * FROM gcom ORDER BY id DESC
LIMIT 6") or die(mysql_error());	
	while($row = mysql_fetch_array($result))
		{
			$Listid = $row['Id'];
			$brand = $row['brand'];
			$year = $row['year'];
			$type = $row['type'];
			$model = $row['model'];
			$cpu = $row['cpu'];
			$cpumodel = $row['cpumodel'];
			$cpuspeed = $row['cpuspeed'];
			$gcard = $row['gcard'];
			$gcardmodel = $row['gcardmodel'];
			$ram = $row['ram'];
			$size = $row['size'];
			$HardDrive = $row['HardDrive'];
			$HDType = $row['HDType'];
			$OS = $row['OS'];
			$OSversion = $row['OSversion'];
			$Listimage = $row['Pic'];
			$DisplayOutput = $row['DisplayOutput'];
			$DVDdrive = $row['DVDdrive'];
            $webcam = $row['webcam'];
            $wifi = $row['wifi'];
            $lan = $row['lan'];
            $OS = $row['OS'];
            $OSversion = $row['OSversion'];
            $SystemType = $row['SystemType'];
    	    $avaliablility = $row['avaliablility'];
    	    $sellingprice = $row['sellingprice'];
    	    $soldprice = $row['soldprice'];
echo "<li>";
echo "<a href=\"GCOM-One-Product.php?id=$Listid\" >";
 echo "<img id=\"listimage\" src=\"$Listimage\" /> <br/> ";
echo "<h6 class=\"title-list-item\">$brand&nbsp$size\"&nbsp$model&nbsp$type</h6>";
echo "</a>";
echo "<div class=\"detailed\">";
 if($avaliablility =="Damaged")
{echo "<span>Damaged</span><br/>";}
 if($avaliablility =="WestEndStore")
{echo "<span>West End Store</span><br/>";}
 if($avaliablility =="DowntownStore")
{echo "<span>Down Town Store</span><br/>";}
if($avaliablility =="Sold")
{echo "<span>Sold</span><br/>";echo "<span class=\"SellingPrice\"><b>Sold</b></span>";}
 else{echo "<span class=\"SellingPrice\"><b>Selling@$$sellingprice</b></span>";}

echo "<span><b>$cpu&nbsp$cpumodel</b>@$cpuspeed Ghz</span> <br />";
echo "<b>$ram GB Ram&nbsp$HardDrive GB&nbsp$HDType</b>";
echo "</div><!--/ .detailed-->";
echo "</li>";

}
?>


						

					


					</ul>

					<!--<a href="#" class="see">See all automobiles</a>
					
				</div><!--/ .recent-list-computers-->
				
			</section><!--/ #content-->

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	


			<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	

			<aside id="sidebar" class="four columns">
				
				<!--<div class="widget-container widget_loan_calculator">
					
					<div class="widget-head">
						<h3 class="widget-title">Loan Calculator</h3>
					</div>
					
					<div class="entry-loan">
						
						<table>
							<tr>
								<td><label for="loan_amount">Loan Amount</label></td>
								<td><input id="loan_amount" type="text" value="0.00" /></td>
								<td>$</td>
							</tr>
							<tr>
								<td><label for="payment">Down Payment</label></td>
								<td><input id="payment" type="text" value="0.00" /></td>
								<td>$</td>
							</tr>
							<tr>
								<td><label for="rate">Annual Rate</label></td>
								<td><input id="rate" type="text" value="0.00" /></td>
								<td>%</td>
							</tr>
							<tr>
								<td><label for="term">Term</label></td>
								<td><input id="term" type="text" value="0.00" /></td>
								<td>Yrs</td>
							</tr>
							<tr>
								<td>
									<a id="buttonCalculate" href="#" class="button orange">Calculate</a>
								</td>
							</tr>
							<tr>
								<td><label for="payments">Payments</label></td>
								<td><input id="payments" type="text" value="0.00" /></td>
								<td></td>
							</tr>
							<tr>
								<td><label for="mpayment">Monthly Payment</label></td>
								<td><input id="mpayment" type="text" value="0.00" /></td>
								<td>$</td>
							</tr>
						</table>
						
					</div><!--/ .entry-loan-->
					
				<!--</div><!--/ .widget-container-->
				
				<div class="widget-container widget_recent_entries">
					
					<h3 class="widget-title">Recent News</h3>
					
					<ul>
						<li><a href="#">Our Beta1.0 Website is online!</a></li>
						
					</ul>

					
				</div><!--/ .widget-container-->

			</aside><!--/ #sidebar-->

			<!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

		</section><!--/.container -->

		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
		
	</div><!--/ .main-->

	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	
	<footer id="footer" class="container clearfix">
		
		<section class="container clearfix">
			
			<div class="four columns">

				<div class="widget-container widget_text">

					<h3 class="widget-title">About Us</h3>

					<div class="textwidget">

						<p class="white">
							Need repairs?<br/> Come by and we'll take it from there! </p>	
                            We provide:
						<p>
							Hardware Upgrades<br/>Laptop/PC Repair/Mac Repair<br/>CellphoneScreen Replacement
						<br/>Software Installations<br/>IT Support<br/>And Free Estimate!</p>

					</div><!--/ .textwidget-->

					<a href="GCOM-Service.html" class="see">Read more</a>

				</div><!--/ .widget-container-->	

			</div><!--/ .four .columns-->

			<div class="four columns">

				<div class="widget-container widget_text">

					<h3 class="widget-title"><span>Our </span>Hours</h3>

					<div id="_openingHoursSpecification4" itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification" class="textwidget">

						
<span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek"><ul itemprop="name" class="hours">

							<li>Monday <span>10 am to 6 pm</span></li>
							<li>Tuesday <span>10 am to 6 pm</span></li>
							<li>Wednesday <span>10 am to 6 pm</span></li>
							<li>Thursday <span>10 am to 6 pm</span></li>
							<li>Friday <span>10 am to 6 pm</span></li>
							<li>Saturday <span>10:30 am to 5 pm</span></li>
							<li>Sunday <span>Closed</span></li>

						</ul></span><!-- / .hours -->

					</div><!-- / .textwidget -->

				</div><!-- / .widget-container -->

			</div><!-- / .four .columns -->
			<div class="four columns">

				<div class="widget-container widget_contacts">

					<h3 class="widget-title">Our Contacts</h3>			

					<ul class="our-contacts">

						<li class="address">
							<b>Address Info:</b>
							<p>West End Store(main):<br/>#100 10524-178st Edmonton,AB T5S 2J1</p>
							<p>Downtown Store:<br/>10932-97st Edmonton,AB T5H 2M9</p>
						</li>
						<li class="phone">
							<b>Phone(West End):</b><br/>&nbsp;<span>(780) 757-6828</span> <br />
							<b>Phone(Downtown):</b><br/>&nbsp;<span>(780) 756-6828</span> <br />
						</li>
						<li>
							<b>Email: <a href="mailto:gcom.computer.ltd@gmail.com">
<meta id="_email14" itemprop="email" content="gcom.computer.ltd@gmail.com">gcom.computer.ltd@gmail.com</a></b>
						</li>
						

					</ul><!--/ .our-contacts-->

				</div><!--/ .widget-container-->

			</div><!--/ .four .columns-->
	<div class="four columns">

				<div id="gMaps" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0px);">
<iframe width="100%" height="100%" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gcom+Computers+Ltd+(West+End+Location),+Edmonton,+AB&amp;aq=0&amp;oq=Gcom+Compute&amp;sll=53.549301,-113.627424&amp;sspn=0.117084,0.308647&amp;ie=UTF8&amp;hq=Gcom+Computers+Ltd+(West+End+Location),&amp;hnear=Edmonton,+Division+No.+11,+Alberta&amp;ll=53.549301,-113.627424&amp;spn=0.117009,0.308647&amp;t=m&amp;z=12&amp;iwloc=A&amp;cid=11830249260297888655&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Gcom+Computers+Ltd+(West+End+Location),+Edmonton,+AB&amp;aq=0&amp;oq=Gcom+Compute&amp;sll=53.549301,-113.627424&amp;sspn=0.117084,0.308647&amp;ie=UTF8&amp;hq=Gcom+Computers+Ltd+(West+End+Location),&amp;hnear=Edmonton,+Division+No.+11,+Alberta&amp;ll=53.549301,-113.627424&amp;spn=0.117009,0.308647&amp;t=m&amp;z=12&amp;iwloc=A&amp;cid=11830249260297888655" style="color:#0000FF;text-align:left">View Larger Map</a></small>

				</div>

			</div><!--/ .four .columns-->

			<div class="adjective clearfix">

			
			</div><!--/ .adjective-->
		
		</section><!--/ .container-->
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCopyright © 2014 Gcom Computer Ltd. All Rights Reserved
	</footer><!--/ #footer-->
	
	<!-- - - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - - -->		
	
</div><!--/ .wrap-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<!--[if lt IE 9]>
	<script src="js/selectivizr-and-extra-selectors.min.js"></script>
<![endif]-->
<script src="sliders/flexslider/jquery.flexslider-min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49510667-1', 'gcomcomputer.com');
  ga('send', 'pageview');

</script>

</body>
</html>

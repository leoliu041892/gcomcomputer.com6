<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<title>Gcom Computer | Cellphone & Tablet</title>
	
	<meta name="Description" content="We provide the Best Refurbished or New iPhone, Sony, Samsung, BlackBerry, LG, Motorola phones, Tablets in Edmonton"/>
	<meta name="author" content="" />
	<link rel="canonical" href="http://www.gcomcomputer.com/GCOM-Cellphone-Tablet.php">
	
	<link rel="shortcut" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen" />

	<!-- HTML5 Shiv + detect touch events -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="menu-1 h-style-1 text-1">

<div class="wrap">
	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	
	<header id="header" class="clearfix">
		
		<a href="index.php" id="logo"><img src="images/logo.png" alt="Gcom Computer Edmonton " /></a>
		
		<div class="widget-container widget_search">
			
				
			<span class="adds">(Main)<b>West End Store</b><br/> #100 10524-178st, Edmonton, AB, T5S 2J1</span><br />
			<span class="call"><span>(780)</span> 757-6828</span><br />
			<span class="adds"><b>Downtown Store</b><br/>10932-97st, Edmonton, AB, T5H 2M9</span><br/>
         <span class="call"><span>(780)</span> 756-6828</span><br />

			<!--<form action="#" id="searchform" method="get" />

				<p>
					<input type="text" id="s" placeholder="Search" />
					<button type="submit" id="searchsubmit"></button>
				</p>

			</form><!--/ #searchform-->

		</div><!--/ .widget-container-->			
		
				<nav id="navigation" class="navigation">
			
		
			
				<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="GCOM-All-Computers.php">Laptop / Desktop</a>
					
				</li>
			<li class="current-menu-item">
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
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container sbl clearfix">

			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

			<section id="content" class="twelve columns">
				
				<div class="recent-list-computers">
					
					<h3 class="widget-title"><span>All</span> Items</h3>
				
					<ul class="recent-list-computers clearfix">
<?php 
	include("mysql_connect.php");
	
        $Brand = $_GET['Brand'];
        $minprice = $_GET['minprice'];
        $maxprice = $_GET['maxprice'];
        $type = $_GET['type'];
        $category = $_GET['category'];

   $result = mysql_query("SELECT * FROM phone ORDER BY id") or die(mysql_error());	
	
	if(isset($category)) {
	    $result = mysql_query("SELECT * FROM phone WHERE type='$category'") or die (mysql_error());
	
	 }

	if(isset($Brand) && isset($minprice) && isset($maxprice) && isset($type)) {
	    $result = mysql_query("SELECT * FROM phone WHERE brand='$Brand'AND price >= '$minprice'AND price <= '$maxprice' AND type = '$type' ") or die (mysql_error());
	
	 }

	while($row = mysql_fetch_array($result))
		{
			$Listid = $row['Id'];
			




$looks = $row['looks'];
$colour = $row['colour'];
$id = $row['id'];
$serialnumb = $row['serialnumb'];

$avaliablity = $row['avaliablity'];
$type = $row['type'];
$pic = $row['pic'];
$brand = $row['brand'];
$model = $row['model'];
$price = $row['price'];
$phonelock = $row['phonelock'];
$storage = $row['storage'];


echo "<li>";
echo "<img src=\"$pic\" alt=\"\"/>";
echo "<h6 class=\"title-list-item\">$brand&nbsp$model</h6>";

	echo "<div class=\"detailed\">";
	echo "<span class=\"cost\">$ $price</span>";
	echo "<span>";
	if($type=="accesory"){echo "<br/><br/><br/>";}else{
	echo "Lock: $phonelock<br/>storage: $storage GB<br/>";}
echo "Colour: $colour</span> <br />";
 if($avaliablity =="WestEndStore")
{echo "<b>West End Store</b>";}
 if($avaliablity =="DowntownStore")
{echo "<b>Downtown Store</b>";}

echo "</div>";
echo "</li>";

}
?>
					
	

					</ul><!--/ .recent-list-computers-->					
					
				</div><!--/ .recent-list-computers-->
				
			
			</section><!--/ #content-->

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	


			<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	

			<aside id="sidebar" class="four columns">
				
				
				<div class="widget-container widget_custom_search">

					<h3 class="widget-title">Quick Search</h3>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="boxpanel" class="form-panel" />
				
				<fieldset>
					<label for="manufacturer">Brand:</label>
					<select id="manufacturer" name="Brand">

					<option value="Apple">Apple</option>
					<option value="Sony">Sony</option>
					<option value="Samsung">Samsung</option>
					<option value="LG">LG</option>
					<option value="Motorola">Motorola</option>


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
					<option value="Phone">Phone</option>
					<option value="pad">Tablet</option>
					<option value="accesory">Accessories</option>
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

					<h3 class="widget-title">Our Hours</h3>

					<div class="textwidget">

						<ul class="hours">

							<li>Monday <span>10 am to 6 pm</span></li>
							<li>Tuesday <span>10 am to 6 pm</span></li>
							<li>Wednesday <span>10 am to 6 pm</span></li>
							<li>Thursday <span>10 am to 6 pm</span></li>
							<li>Friday <span>10 am to 6 pm</span></li>
							<li>Saturday <span>10:30 am to 5 pm</span></li>
							<li>Sunday <span>Closed</span></li>

						</ul><!--/ .hours-->

					</div><!--/ .textwidget-->

				</div><!--/ .widget-container-->

			</div><!--/ .four .columns-->

			<div class="four columns">

				<div class="widget-container widget_contacts">

					<h3 class="widget-title">Our Contacts</h3>			

					<ul class="our-contacts">

						<li class="address">
							<b>Address Info:</b>
							<p>West End Store(main):<br/>#100 10524-178st Edmonton,AB T5S 2J1</p>
							<p>Downtown Store:<br/>10932-97st Edmonton,AB T5S 2J1</p>
						</li>
						<li class="phone">
							<b>Phone(West End):</b><br/>&nbsp;<span>(780) 757-6828</span> <br />
							<b>Phone(Downtown):</b><br/>&nbsp;<span>(780) 756-6828</span> <br />
						</li>
						<li>
							<b>Email: <a href="mailto:gcom.computer.ltd@gmail.com">gcom.computer.ltd@gmail.com</a></b>
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
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
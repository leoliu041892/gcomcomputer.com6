<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<title>Gcom Computer | One Products</title>
	<meta name="Description" content="We provide:Laoptops, Desktops, Phone, Hardware Upgrades, Laptop/PC Repair/Mac Repair, CellphoneScreen Replacement, Software Installations, IT Support And Free Estimate!"/>
	<meta name="author" content="" />
	<link rel="canonical" href="http://www.gcomcomputer.com/GCOM-One-Product.php">
	
	<link rel="shortcut" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/galleriffic.css" media="screen" />
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
				<li class="current-menu-item"><a href="GCOM-All-Computers.php">Laptop / Desktop</a>
					
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
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container sbl clearfix">

			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

			<section id="content" class="twelve columns">
				
				<article class="item clearfix">
					<?php 
	include("mysql_connect.php");
        $id = $_GET['id'];
       
if(isset($id)){
   $result = mysql_query("SELECT * FROM gcom Where id = $id") or die(mysql_error());	
	}else{ $result = mysql_query("SELECT * FROM gcom ORDER BY id") or die(mysql_error());	
	}

	

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
    	    $SBid = $row['SbaskedforID'];
    	    $usbtype = $row['usbtype'];
    	    $usbN = $row['usbN'];
            $cpucores=$row['cpucores'];

}
?>
					<h2 class="title"><?php echo"$brand&nbsp$model&nbsp$size\"&nbsp$type";?></h2>
					
					<div id="gallery" class="gallery">

						<div class="slideshow-container">
							<div id="loading" class="loader"></div>
							<div id="slideshow" class="slideshow clearfix"></div>
						</div><!--/ .slideshow-container-->

						<div id="thumbs" class="clearfix" style="display: none">

							<ul class="thumbs list-image clearfix" style="display: none">

								<li style="display: none">
									<a style="display: none" class="thumb" name="leaf" href="<?php echo "$Listimage"; ?>" title="Title 0">
										<img  src="<?php echo "$Listimage"; ?>" alt="Title #1"  style="display: none"/>
									</a>
								</li>

								<!--<li>
									<!<a class="thumb" name="drop" href="images/temp/item-2.jpg" title="Title 1">
										<!<img src="images/temp/list-thumb-2.jpg" alt="Title #2" />
									<!</a>
								<!</li>
<!
								<!<li>
									<!<a class="thumb" name="leaf" href="images/temp/item-3.jpg" title="Title 2">
										<!<img src="images/temp/list-thumb-3.jpg" alt="Title #3" />
									<!</a>
								<!</li>	
<!
								<!<li>
									<!<a class="thumb" name="leaf" href="images/temp/item-4.jpg" title="Title 3">
										<!<img src="images/temp/list-thumb-4.jpg" alt="Title #4" />
									<!</a>
								<!</li>	
<!
								<!<li>
									<!<a class="thumb" name="leaf" href="images/temp/item-5.jpg" title="Title 4">
										<!<img src="images/temp/list-thumb-5.jpg" alt="Title #5" />
									<!</a>
								<!</li>	
<!
								<!<li>
									<!<a class="thumb" name="leaf" href="images/temp/item-6.jpg" title="Title 5">
										<!<img src="images/temp/list-thumb-6.jpg" alt="Title #6" />
									<!</a>
								<!</li>	
                                -->
							</ul><!--/ .thumbs-->
                                
						</div><!--/ #thumbs-->

					</div><!--/ #gallery-->
	
					<div class="extra">
						
						<b class="heading">Price:</b>
						
						<span class="cost">$<?php echo "$sellingprice"; if($avaliablility =="Damaged")
                                     {echo "<br/>@Damaged";}
                                     if($avaliablility =="WestEndStore")
                                     {echo "<br/>@West End Store";}
                                     if($avaliablility =="DowntownStore")
                                     {echo "<br/>@Downtown Store";}?>
                                     </span></li></span>
						
						<ul class="list type-1">
							<li><b>Inventory Number: </b><span><?php echo "<br/>$SBid"; ?></span></li>
							<li><b>Processor: </b><span><?php echo "<br/>$cpu&nbsp$cpumodel@$cpuspeed GHz&nbsp($cpucores Core)" ?></span></li>
							<li><b>Graphic Card: </b><span><?php echo "<br/>$gcard&nbsp$gcardmodel<br/>$DisplayOutput" ?></span></li>
							<li><b>Ram: </b><span><?php echo "<br/>$ram&nbspGB" ?></span></li>
							<li><b>Storage: </b><span><?php echo "<br/>$HardDrive GB $HDType" ?></span></li>
							<li><b>USB: </b><span><?php echo "<br/>$usbtype X $usbN" ?> </span></li>
							<li><b>OS: </b><span><?php echo "<br/>$OS $OSversion $SystemType" ?></span></li>
							 <?php
							 if($DVDdrive =="Y"){echo "<li><b>DVDdrive&nbsp</span></li>";}
		                     if($webcam =="Y"){echo "<li><b>WebCam&nbsp</span></li>";}
		                     if($wifi =="Y"){echo "<li><b>Wi-Fi&nbsp</span></li>";}
		                     if($lan =="Y"){echo "<li><b>LAN&nbsp</span></li>";}
                              ?>

						        </ul>
						
						

							
					</div><!--/ .extra-->					
					
					
				</article><!--/ .item-->
				
			</section><!--/ #content-->

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	


			<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	
	<aside id="sidebar" class="four columns">
				
				
				<div class="widget-container widget_custom_search">

					<h3 class="widget-title">Quick Search</h3>
			<form method="get" action="search.php?" id="boxpanel" class="form-panel" />
				
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
							<p>Downtown Store:<br/>10932-97st Edmonton,AB T5H 2M9</p>
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
<script src="js/jquery.galleriffic.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
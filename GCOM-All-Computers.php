<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<title>Gcom Computer | All Computers</title>
	
	<meta name="Description" content="We provide the Best Refurbished or New Business, Convertible, Gaming, Home, Mini / Travel Desktops/Laptops, Ultrabooks in Edmonton "/>
	<meta name="author" content="" />
	<link rel="canonical" href="http://www.gcomcomputer.com/GCOM-All-Computers.php">
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
				
				<div class="recent-list-computers">
					
					<h3 class="widget-title"><span>All</span> Items</h3>
				
					<ul class="recent-list-computers clearfix">

<?php
  $Brand = $_GET['Brand'];
        $minprice = $_GET['minprice'];
        $maxprice = $_GET['maxprice'];
        $type = $_GET['type'];
	/*
		Place code to connect to your DB here.
	*/
	include("mysql_connect.php");
	$tbl_name="gcom";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	  $sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
	$query = "SELECT COUNT(*) as num FROM $tbl_name";

	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "GCOM-All-Computers.php"; 	//your file name  (the name of this file)
	$limit = 9; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
		else
			$pagination.= "<span class=\"disabled\"> previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a class=\"page\" href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a class=\"page\" href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a class=\"page\" href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next </a>";
		else
			$pagination.= "<span class=\"disabled\">next </span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
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
echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"single-image picture\">";
echo "<img src=\"$Listimage\" alt=\"\"/>";
echo "</a>";
echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"list-meta\">";
echo "<h6 class=\"title-list-item\">$brand&nbsp$model&nbsp$size\"&nbsp$type</h6>";
echo "</a>";
	echo "<div class=\"detailed\">";
    if($avaliablility =="Sold")
{echo "<span class=\"cost\">Sold</span>";}
else{
	echo "<span class=\"cost\">$ $sellingprice</span>";}
	echo "<span>$cpu&nbsp$cpumodel@$cpuspeed Ghz<br/>$HardDrive GB Hard Drive<br/> $ram GB Ram</span> <br />";
if($avaliablility =="Damaged")
{echo "<b>Damaged</b>";}
 if($avaliablility =="WestEndStore")
{echo "<b>West End Store</b>";}
 if($avaliablility =="DowntownStore")
{echo "<b>Downtown Store</b>";}
if($avaliablility =="Sold")
{echo "<b>Sold</b>";}

echo "</div>";
echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"button orange\">Details</a>";
echo "</li>";
}
	
	?>



					</ul><!--/ .recent-list--->					
					
				</div><!--/ .recent-list--->
				
				<div class="wp-pagenavi clearfix">
					
<?php echo "$pagination";?>
				</div><!--/ .wp-pagenavi-->

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
                    <option value="AllInOne">AllInOne</option>
					<option value="Phone">Phone</option>
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
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
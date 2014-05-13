<?php
$currentMenu = 1;
$subtitle = "One Product";
include_once 'static/header.php';
?>

<div class="main">

    <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

    <section class="container sbl clearfix">

        <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

        <section id="content" class="twelve columns">

            <article class="item clearfix">
                <?php
                include("mysql_connect.php");
                $id = $_GET['id'];

                if (isset($id)) {
                    $result = mysql_query("SELECT * FROM gcom Where id = $id") or die(mysql_error());
                } else {
                    $result = mysql_query("SELECT * FROM gcom ORDER BY id") or die(mysql_error());
                }



                while ($row = mysql_fetch_array($result)) {
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
                    $cpucores = $row['cpucores'];
                }
                ?>
                <h2 class="title"><?php echo"$brand&nbsp$model&nbsp$size\"&nbsp$type"; ?></h2>

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

                    <span class="cost">$<?php
                        echo "$sellingprice";
                        if ($avaliablility == "Damaged") {
                            echo "<br/>@Damaged";
                        }
                        if ($avaliablility == "WestEndStore") {
                            echo "<br/>@West End Store";
                        }
                        if ($avaliablility == "DowntownStore") {
                            echo "<br/>@Downtown Store";
                        }
                        ?>
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
                        if ($DVDdrive == "Y") {
                            echo "<li><b>DVDdrive&nbsp</span></li>";
                        }
                        if ($webcam == "Y") {
                            echo "<li><b>WebCam&nbsp</span></li>";
                        }
                        if ($wifi == "Y") {
                            echo "<li><b>Wi-Fi&nbsp</span></li>";
                        }
                        if ($lan == "Y") {
                            echo "<li><b>LAN&nbsp</span></li>";
                        }
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

<?php include_once 'static/footer.php'; ?>
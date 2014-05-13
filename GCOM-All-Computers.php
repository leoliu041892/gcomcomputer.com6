<?php
$currentMenu = 1;
$subtitle = "All Computers";
include_once 'static/header.php';
?>


<div class="main">

    <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

    <section class="container sbl clearfix">

        <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

        <section id="content" class="twelve columns">

            <div class="recent-list-computers">

                <h3 class="widget-title"><span>All</span> Items</h3>

                <ul class="recent-list-computers clearfix">

                    <?php
                    $Brand = filter_input(INPUT_GET, 'Brand');
                    $minprice = filter_input(INPUT_GET, 'minprice');
                    $maxprice = filter_input(INPUT_GET, 'maxprice');
                    $type = filter_input(INPUT_GET, 'type');
                    /*
                      Place code to connect to your DB here.
                     */
                    include("mysql_connect.php");
                    $tbl_name = "gcom";  //your table name
                    // How many adjacent pages should be shown on each side?
                    $adjacents = 3;

                    /*
                      First get total number of rows in data table.
                      If you have a WHERE clause in your query, make sure you mirror it here.
                     */

                    $query = "SELECT COUNT(*) as num FROM $tbl_name";

                    $total_pages = mysql_fetch_array(mysql_query($query));
                    $total_pages = $total_pages['num'];

                    /* Setup vars for query. */
                    $targetpage = "GCOM-All-Computers.php";  //your file name  (the name of this file)
                    $limit = 9;         //how many items to show per page
                    $page = filter_input(INPUT_GET, 'page');
                    if ($page)
                        $start = ($page - 1) * $limit;    //first item to display on this page
                    else
                        $start = 0;        //if no page var is given, set start to 0

                        /* Get data. */
                    $sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
                    $result = mysql_query($sql);

                    /* Setup page vars for display. */
                    if ($page == 0)
                        $page = 1;     //if no page var is given, default to 1.
                    $prev = $page - 1;       //previous page is page - 1
                    $next = $page + 1;       //next page is page + 1
                    $lastpage = ceil($total_pages / $limit);  //lastpage is = total pages / items per page, rounded up.
                    $lpm1 = $lastpage - 1;      //last page minus 1

                    /*
                      Now we apply our rules and draw the pagination object.
                      We're actually saving the code to a variable in case we want to draw it more than once.
                     */
                    $pagination = "";
                    if ($lastpage > 1) {
                        $pagination .= "<div class=\"pagination\">";
                        //previous button
                        if ($page > 1)
                            $pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
                        else
                            $pagination.= "<span class=\"disabled\"> previous</span>";

                        //pages	
                        if ($lastpage < 7 + ($adjacents * 2)) { //not enough pages to bother breaking it up
                            for ($counter = 1; $counter <= $lastpage; $counter++) {
                                if ($counter == $page)
                                    $pagination.= "<span class=\"current\">$counter</span>";
                                else
                                    $pagination.= "<a class=\"page\" href=\"$targetpage?page=$counter\">$counter</a>";
                            }
                        }
                        elseif ($lastpage > 5 + ($adjacents * 2)) { //enough pages to hide some
                            //close to beginning; only hide later pages
                            if ($page < 1 + ($adjacents * 2)) {
                                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
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
                            elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                $pagination.= "...";
                                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
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
                            else {
                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                $pagination.= "...";
                                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
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

                        echo "<li>";
                        echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"single-image picture\">";
                        echo "<img src=\"$Listimage\" alt=\"\"/>";
                        echo "</a>";
                        echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"list-meta\">";
                        echo "<h6 class=\"title-list-item\">$brand&nbsp$model&nbsp$size\"&nbsp$type</h6>";
                        echo "</a>";
                        echo "<div class=\"detailed\">";
                        if ($avaliablility == "Sold") {
                            echo "<span class=\"cost\">Sold</span>";
                        } else {
                            echo "<span class=\"cost\">$ $sellingprice</span>";
                        }
                        echo "<span>$cpu&nbsp$cpumodel@$cpuspeed Ghz<br/>$HardDrive GB Hard Drive<br/> $ram GB Ram</span> <br />";
                        if ($avaliablility == "Damaged") {
                            echo "<b>Damaged</b>";
                        }
                        if ($avaliablility == "WestEndStore") {
                            echo "<b>West End Store</b>";
                        }
                        if ($avaliablility == "DowntownStore") {
                            echo "<b>Downtown Store</b>";
                        }
                        if ($avaliablility == "Sold") {
                            echo "<b>Sold</b>";
                        }

                        echo "</div>";
                        echo "<a href=\"GCOM-One-Product.php?id=$Listid\" class=\"button orange\">Details</a>";
                        echo "</li>";
                    }
                    ?>



                </ul><!--/ .recent-list--->					

            </div><!--/ .recent-list--->

            <div class="wp-pagenavi clearfix">

                <?php echo "$pagination"; ?>
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
                $brandsearch = filter_input(INPUT_GET, 'Brand');
                $min = filter_input(INPUT_GET, 'minprice');
                $max = filter_input(INPUT_GET, 'maxprice');
                $typesearch = filter_input(INPUT_GET, 'type');
                ?>
            </div><!--/ .widget-container-->



        </aside><!--/ #sidebar-->

        <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

    </section><!--/.container -->

    <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			

</div><!--/ .main-->

<?php include_once 'static/footer.php'; ?>
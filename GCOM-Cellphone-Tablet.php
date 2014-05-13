<?php
$currentMenu = 2;
$subtitle = "Cellphone & Tablet";
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
                    include("mysql_connect.php");

                    $Brand = filter_input(INPUT_GET, 'Brand');
                    $minprice = filter_input(INPUT_GET, 'minprice');
                    $maxprice = filter_input(INPUT_GET, 'maxprice');
                    $type = filter_input(INPUT_GET, 'type');
                    $category = filter_input(INPUT_GET, 'category');

                    $result = mysql_query("SELECT * FROM phone ORDER BY id") or die(mysql_error());

                    if (isset($category)) {
                        $result = mysql_query("SELECT * FROM phone WHERE type='$category'") or die(mysql_error());
                    }

                    if (isset($Brand) && isset($minprice) && isset($maxprice) && isset($type)) {
                        $result = mysql_query("SELECT * FROM phone WHERE brand='$Brand'AND price >= '$minprice'AND price <= '$maxprice' AND type = '$type' ") or die(mysql_error());
                    }

                    while ($row = mysql_fetch_array($result)) {
                        $Listid = $row['id'];

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
                        if ($type == "accesory") {
                            echo "<br/><br/><br/>";
                        } else {
                            echo "Lock: $phonelock<br/>storage: $storage GB<br/>";
                        }
                        echo "Colour: $colour</span> <br />";
                        if ($avaliablity == "WestEndStore") {
                            echo "<b>West End Store</b>";
                        }
                        if ($avaliablity == "DowntownStore") {
                            echo "<b>Downtown Store</b>";
                        }

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
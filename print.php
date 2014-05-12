<style>
li{float:left; width: 400px;margin-left: 10px;}
</style>
<form method="get" name="searchForm" action="<?php echo $_SERVER['PHP_SELF']. "?movies=1"; ?>">
<label for="searchby">Search: </label><br/>
		<input type="text" name="Value1" placeholder="From"  required />
		<input type="text" name="Value2" placeholder="To"/>
		<input type="submit" name="search" value="Search" />
   </form>

     <ul id="coolMenu">
    <li><a href="input.php">Input</a></li>
    <li><a href="internal.php">Home</a></li>
     <li><a href="input2.php">Phone</a></li>
    
</ul>

<?php
echo "<br/>";
	include("mysql_connect.php");
	
        $Value1 = $_GET['Value1'];
        $Value2 = $_GET['Value2'];


   $result = mysql_query("SELECT * FROM gcom ORDER BY id") or die(mysql_error());	


   if (isset($Value1) && $Value2=="") {
   	 $result = mysql_query("SELECT * FROM gcom WHERE id >= '$Value1'") or die (mysql_error());
   }elseif (isset($Value2) && isset($Value1)) {
    $result = mysql_query("SELECT * FROM gcom WHERE id >= '$Value1' AND id <= '$Value2' ") or die (mysql_error());
   }
     
	while($row = mysql_fetch_array($result))
		{
			$Listid = $row['SbaskedforID'];
			$Id = $row['Id'];
			$brand = $row['brand'];
			$year = $row['year'];
			$type = $row['type'];
			$model = $row['model'];
			$cpu = $row['cpu'];
			$cpumodel = $row['cpumodel'];
            $cpucores=$row['cpucores'];
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

         echo "<li>";
         echo "<br />$Listid&nbsp&nbsp";
         echo "<b>$Id</b>";
            echo"<br /><label><b>$brand&nbsp$year&nbsp$model&nbsp$size\"</b></label><br />";
		    echo"$cpu&nbsp$cpumodel@$cpuspeed Ghz&nbsp($cpucores Core)<br/> $gcard&nbsp$gcardmodel&nbsp/&nbsp$DisplayOutput&nbsp<br/>$ram GB Ram&nbsp/&nbsp$HardDrive GB&nbsp$HDType<br/>";
		   
		    if($DVDdrive =="Y"){echo "DVD+/-Drive&nbsp";echo"/";}
		    if($webcam =="Y"){echo "WebCam&nbsp";echo"/";}
		    if($wifi =="Y"){echo "Wi-Fi&nbsp";echo"/";}
		    if($lan =="Y"){echo "LAN&nbsp";}
		    echo"<br />$OS $OSversion&nbsp$SystemType<br />";
           
            echo "</li>";
		  
		}


		?>

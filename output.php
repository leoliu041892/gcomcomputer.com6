     <ul id="coolMenu">
     	<li><a href="internal.php">Home</a></li>
    <li><a href="input.php">Input</a></li>
    
    <li><a href="print.php">Print</a></li>
     <li><a href="input2.php">Phone</a></li>
    
</ul>

<?php


		include("mysql_connect.php");
		
		$id = $_GET['id'];
	if(isset($id))
		{$result = mysql_query("SELECT * FROM gcom WHERE id = '$id'");}
		else{	$result = mysql_query("SELECT * FROM gcom ORDER BY RAND() LIMIT 1");}

			
		while($row = mysql_fetch_array($result))
		{
			
			$brand = $row['brand'];
			$year = $row['year'];
			$type = $row['type'];
			$model = $row['model'];
			$serialnumb = $row['serialnumb'];
			$cpu = $row['cpu'];
			$cpumodel = $row['cpumodel'];
			$cpuspeed = $row['cpuspeed'];
			$gcard = $row['gcard'];
			$gcardmodel = $row['gcardmodel'];
			$ram = $row['ram'];
			$HardDrive = $row['HardDrive'];
			$HDType = $row['HDType'];
			$size = $row['size'];
			$usbtype = $row['usbtype'];
			$usbN = $row['usbN'];
			$DisplayOutput = $row['DisplayOutput'];
			$DVDdrive = $row['DVDdrive'];
			$webcam = $row['webcam'];
			$wifi = $row['wifi'];
			$lan = $row['lan'];
			$OS = $row['OS'];
			$OSversion = $row['OSversion'];
			$SystemType = $row['SystemType'];
			$Listimage = $row['Pic'];
			$Id = $row['Id'];
			$customername = $row['customername'];
			$customercell = $row['customercell'];
			$avaliablility = $row['avaliablility'];
			$ebay = $row['ebay'];
			$sellingprice = $row['sellingprice'];
			$soldprice = $row['soldprice'];
			$condition = $row['SBasked'];


		}
            echo "<div id=\"Detail\">";
		    echo "<img id=\"listimage\" src=\"$Listimage\" /> <br/> ";
		
		   
		    
		     if($avaliablility =="Damaged")
		     {echo "<h2>Damaged</h2>";}
		     if($avaliablility =="WestEndStore")
		     {echo "<h2>WestEndStore</h2>";}
		 	 if($avaliablility =="DowntownStore")
		     {echo "<h2>DowntownStore</h2>";}
		     if($ebay =="OnEbay")
		     {echo "<h2>Selling on Ebay</h2>";}

              if($avaliablility =="Sold")
		     {echo "<h2>Sold</h2>";
		      echo "<label>Customer Name:$customername</label>&nbsp&nbsp&nbsp&nbsp";
		      echo "<label>Customer Phone Number:$customercell</label><br/>";
		      echo "<label>Sold@:$soldprice</label><br/>";
		      echo "<br/>";}else{echo "<h2>Price:$ $sellingprice</h2>";}
		     echo "<label>ID</label>";
		    echo "$Id<br/>";
		    echo "$brand&nbsp"; echo "$year&nbsp"; echo "$model&nbsp";
		    echo "$type&nbsp";echo" $size\"&nbsp";  echo "$cpu &nbsp $cpumodel &nbsp $cpuspeed<br/>";
		    echo "$ram GB RAM&nbsp";echo "$HardDrive GB&nbsp$HDType<br/>";
		     echo" $OS$OSversion&nbsp$SystemType <br />";
		    echo" <br /><label>Serial Number:</label><br />";
		    echo "$serialnumb<br/>";
		    echo" <label>Graphic:</label><br />";
		    echo" $gcard&nbsp";
		    echo "$gcardmodel<br/>";
		    echo" <label>USB:</label><br />";
		    echo "$usbtype x $usbN<br/>";
		    echo" <label>Display Output:</label><br/>";
            echo" $DisplayOutput<br/>";
             echo" <label>Other:</label><br/>";

		    if($DVDdrive =="Y"){echo "DVDdrive<br/>";}

		    if($webcam =="Y"){echo "WebCam<br/>";}

		    if($wifi =="Y"){echo "Wi-Fi<br/>";}

		    if($lan =="Y"){echo "LAN<br/>";}
		echo"$condition";
		    
			if(isset($_SESSION['nmsdhsieydndkshjshsk'])){

	

echo "<a id=\"edit\" href=\"edit.php?id=$Listid\" >";
echo "Edit";
echo "</a>";}
			   echo "</div>";
		
	?>

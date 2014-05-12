<?php

		include("mysql_connect.php");

   $result = mysql_query("SELECT * FROM gcom ORDER BY id") or die(mysql_error());	
	while($row = mysql_fetch_array($result))
		{ $Listid2 = $row['SbaskedforID'];
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

   echo "<div id=\"Item\">";
		    echo "<a href=\"output.php?id=$Listid\" >";
		    echo "<img id=\"listimage\" src=\"$Listimage\" /> <br/> ";
		    echo "&nbsp&nbsp&nbsp$Listid&nbsp&nbsp&nbsp$Listid2";
            echo "<div id=\"Info\">";   
                if($avaliablility =="Damaged")
		     {echo "<label>Damaged<br/></label>";}
		     if($avaliablility =="WestEndStore")
		     {echo "<label>WestEndStore<br/></label>";}
		 	 if($avaliablility =="DowntownStore")
		     {echo "<label>DowntownStore<br/></label>";}
		   
              if($avaliablility =="Sold")
		     {echo "<label>Sold<br/></label>";}
		 else{echo "<label>Price:$ $sellingprice</label>";}
		    
            echo "<div id=\"text\">";
            echo"<label> $brand&nbsp$year&nbsp$type&nbsp$size\"&nbsp$model</label><br />";
		    echo"$cpu&nbsp$cpumodel@$cpuspeed <br/> $gcard Graphic<br/>$ram GB Ram<br/>$HardDrive GB&nbsp$HDType";
		    echo" $DisplayOutput&nbsp";
		    if($DVDdrive =="Y"){echo"/";echo "DVDdrive&nbsp";}
		    if($webcam =="Y"){echo"/";echo "WebCam&nbsp";}
		    if($wifi =="Y"){echo"/";echo "Wi-Fi&nbsp";}
		    if($lan =="Y"){echo"/";echo "LAN&nbsp";}

		    echo"OS:$OS $OSversion&nbsp$SystemType<br />";
echo "</div>";
echo "</div>";
echo "</a>";
echo "<a href=\"edit.php?id=$Listid\" >Edit</a>";
echo "<br/>";
echo "<br/>";


// make sure you create YOUR OWN session....DON'T COPY MINE
if(isset($_SESSION['nmsdhsieydndkshjshsk'])){

	

echo "<a id=\"edit\" href=\"edit.php?id=$Listid\" >";
echo "Edit";
echo "</a>";
}
echo "</div>";


		}
		?>

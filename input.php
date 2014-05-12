<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

	
		include("mysql_connect.php");
?>

<nav id="topNav">
     <ul id="coolMenu">
    <li><a href="internal.php">Home</a></li>
    <li><a href="print.php">Print</a></li>
    <li><a href="input2.php">Phone</a></li>
</ul>
<?php
	$brand = trim($_POST['brand']);
	$year = trim($_POST['year']);
	$type = trim($_POST['type']);
	$model = trim($_POST['model']);
	$serialnumb = trim($_POST['serialnumb']);
	$cpu = trim($_POST['cpu']);
	$cpumodel = trim($_POST['cpumodel']);
	$cpuspeed = trim($_POST['cpuspeed']);
	$gcard = trim($_POST['gcard']);
	$gcardmodel = trim($_POST['gcardmodel']);
	$ram = trim($_POST['ram']);
	$HardDrive = trim($_POST['HardDrive']);
    $HDType = trim($_POST['HDType']);	
	$size = trim($_POST['size']);
    $usbtype = trim($_POST['usbtype']);
    $usbN = trim($_POST['usbN']);
    $DisplayOutput = trim($_POST['DisplayOutput']);
    $DVDdrive = trim($_POST['DVDdrive']);
    $webcam = trim($_POST['webcam']);
    $wifi = trim($_POST['wifi']);
    $lan = trim($_POST['lan']);
    $OS = trim($_POST['OS']);
    $OSversion = trim($_POST['OSversion']);
    $SystemType = trim($_POST['SystemType']);
    $customername = trim($_POST['customername']);
    $customercell = trim($_POST['customercell']);
    $avaliablility = trim($_POST['avaliablility']);
    $ebay = trim($_POST['ebay']);
    $soldprice = trim($_POST['soldprice']);
    $sellingprice = trim($_POST['sellingprice']);
    $ID2 = trim($_POST['ID2']);
    $ID3 =trim($_POST['condition']);
    $pic =trim($_POST['pic']);
    $cpucores =trim($_POST['cpucores']);
     $onsale =trim($_POST['onsale']);

	if(isset($_POST['submit']))
{      
	$boolValidateOk = 1;

		#if($_FILES['image']['type'] == "image/jpeg")
		#{
#			
		#}
		#else
		#{
			#$boolValidateOk = 0;
			#$message = "Wrong image file type,JPG only<br /></n>";
		#}

		/*if($_FILES['image']['size'] > 9000000)
		/*{
			/*$boolValidateOk = 0;
			/*$message .= "File is too large. Please upload a file of 2MB or less<br />\n";
		/*}
		/*if($boolValidateOk == 1)
		/*{
			/*if(move_uploaded_file($_FILES['image']['tmp_name'], "images/poster/".$_FILES['image']['name']))
			/*{
				/*$filename = "images/poster/" . $_FILES['image']['name'];
			/*}*/
			mysql_query("INSERT INTO gcom
						(brand, year, type,model,
						serialnumb, cpu, cpumodel,cpuspeed,cpucores,
						gcard,gcardmodel, ram, HardDrive,HDType, 
				 		size,  usbtype, usbN,
				 		DisplayOutput,DVDdrive,webcam,
				 		wifi,lan,OS,OSversion,SystemType,
				 		Pic,sellingprice,soldprice,
				 		customername,customercell,avaliablility,ebay,SbaskedforID,SBasked,onsale
				 		) VALUES 
						('$brand','$year','$type','$model',
							'$serialnumb','$cpu','$cpumodel','$cpuspeed','$cpucores',
							'$gcard','$gcardmodel','$ram','$HardDrive','$HDType',
							'$size','$usbtype','$usbN',
							'$DisplayOutput','$DVDdrive','$webcam',
							'$wifi','$lan','$OS','$OSversion','$SystemType',
							'$pic','$sellingprice','$soldprice',
							'$customername','$customercell','$avaliablility','$ebay','$ID2','$ID3','$onsale'
						)") or die(mysql_error());
			$message = "Device successfully added.";
		}
	
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Input" enctype="multipart/form-data">
<div id="Add">
	<p><label>ID:</label>
			<input type="text" name="ID2" placeholder="ID" required /></p>
     <p><label>Customer Name:</label>
		<input type="text"  name="customername" placeholder="Only if Sold"/></p>
	 <p><label>Customer Phone Number:</label>
		<input type="text"  name="customercell" placeholder="Only if Sold"/></p>
      <p><label>Sold Price:</label>
		<input type="text"  name="soldprice" placeholder="Only if Sold"/></p>
    
	<p><label>Ebay</label>
		<select name="ebay">
			        <option value="NotOnEbay">Not On Ebay</option>
					<option value="OnEbay">On Ebay</option>
					
		</select>
		 <p><label>Avaliablity</label>
		<select name="avaliablility">
					<option value="WestEndStore">WestEndStore</option>
					<option value="DowntownStore">DowntownStore</option>
					<option value="Sold">Sold</option>
					<option value="Damaged">Damaged</option>
		</select>
		<p><label>Price:</label>
		<input type="text"  name="sellingprice" placeholder="Selling Price"/></p>
     
	<p><label>Brand</label>
		<select name="brand">
					<option value="Asus">Asus</option>
					<option value="Acer">Acer</option>
					<option value="Lenovo">Lenovo</option>
					<option value="Toshiba">Toshiba</option>
					<option value="Dell">Dell</option>
					<option value="HP">HP</option>
					<option value="Apple">Apple</option>
					<option value="Sony">Sony</option>
					<option value="MSI">MSI</option>
					<option value="Gateway">Gateway</option>
					<option value="Thinkpad">Thinkpad</option>
					<option value="LG">LG</option>

				</select>

	<p><label>Year:</label>
			<input type="text" name="year" placeholder="Year"/></p>

	<p><label>Type:</label>
     <select name="type">
					<option value="Laptop">Laptop</option>
					<option value="Desktop">Desktop</option>
					<option value="AllInOne">AllinOne</option>
	    </select>
	<p><label>Model:</label>
		<input type="text" name="model" placeholder="model" required /></p>
		

	<p><label>S/N:</label>
		<input type="text" name="serialnumb" placeholder="S/N" required /></p>

	<p><label>Size:</label>
        <input type="text" name="size" placeholder="11?" required /></p>
		
	<p><label>CPU: </label>
				<select name="cpu">
					<option value="Intel">Intel</option>
					<option value="AMD">AMD</option>
				</select>
    </p>

	<p><label>CPU Model:</label>
		<input type="text" name="cpumodel" placeholder="model" required /></p>

    <p><label>CPU Cores:</label>
		<input type="text"  name="cpucores" placeholder="number"/></p>

	<p><label>CPU Speed:</label>
		<input type="text" name="cpuspeed" placeholder="just numbers" required />Ghz</p>

     <p><label>Graphic Card: </label>
				<select name="gcard">
                    <option value="Intel">Intel</option>
					<option value="Nvidia">Nvidia</option>
                    <option value="AMD">AMD</option>
					<option value="ATI">ATI</option>
				</select>
    </p>

     <p><label>Graphic Card Model:</label>
		<input type="text" name="gcardmodel" placeholder="model" required /></p>


	
	<p><label>RAM:</label>
		<input type="text"  name="ram" placeholder="ram" required />GB</p>

	<p><label>Hard Drive Capacity:</label>
		<input type="text"  name="HardDrive" placeholder="HardDrive" required />GB</p>

	<p><label>Hard Drive Type:</label>
		        <select name="HDType">
		        	<option value="HDD">HDD</option>
					<option value="SSD">SSD</option>
					
				</select>
</p>
	<p><label>USB Type:</label>
				<select name="usbtype">
					<option value="USB2.0">USB2.0</option>
					<option value="USB3.0">USB3.0</option>
				</select>	
				</p>
	<p><label>Number of USB:</label>
				<select name="usbN">
					<option value="4">4</option>
					<option value="3">3</option>
					<option value="2">2</option>
					<option value="1">1</option>
				</select>
				</p>
	<p><label>Display Out Put:</label>
        <input type="text" name="DisplayOutput" placeholder="VGA/HDMI" required/>
    </p>
	
	<p><label>DVD+/-R/W:</label>
		<input type="checkbox" name="DVDdrive" value="Y">DVD+/-R/W<br>
    <p><label>WebCam:</label>
		<input type="checkbox" name="webcam" value="Y">WebCam<br>
    <p><label>WIFI:</label>
		<input type="checkbox" name="wifi" value="Y">Wifi<br>
    <p><label>LAN:</label>
		<input type="checkbox" name="lan" value="Y">LAN<br>
 	<p><label>OS:</label>
				<select name="OS">
					<option value="Windows">Windows</option>
					<option value="OS X">OS X</option>
				</select>	
    <p><label>OS version:</label>
		
        <select name="OSversion">
					<option value="XP Pro">XP Pro</option>
					<option value="Vista Business">Vista Business</option>
					<option value="Vista Home Premium">Vista Home Premium</option>
					<option value="7 Home Premium">7 Home Premium</option>
					<option value="7 Pro">7 Pro</option>
					<option value="7 Starter">7 Starter</option>
                    <option value="8.1">8</option>
                    <option value="8.1">8 Pro</option>
					<option value="8.1">8.1</option>
                    <option value="8.1 Pro">8.1 Pro</option>
					<option value="10.9.2">10.9.2</option>
					<option value="10.7.5">10.7.5</option>
					
				</select>	

    <p><label>Image:</label>
		<input type="text"  name="pic" placeholder="Link of image"/></p>

   <p><label>Condition:</label>
		<input type="text"  name="condition" placeholder="How it looks"/></p>

		 	<p><label>On Sale?:</label>
				<select name="onsale">
					<option value="yes">yes</option>
					<option value="no">No</option>
					
				</select>	
			</p>
	<p><label>&nbsp;</label>
		<input type="submit" name="submit" value="Submit" /></p>
	<?php
		if(isset($message))
		{
			if($message != "Device successfully added.")
				echo "<div>$message</div>";
			else
				echo "<div>$message</div>";
		}
	?>
</div>
</form>


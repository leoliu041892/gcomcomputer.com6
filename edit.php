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
    if(isset($_POST['delete']))
	{
	$id = $_GET['id'];
	
	mysql_query("DELETE FROM gcom WHERE Id = $id") or die(mysql_error());
	header('Location:edit.php');
    }

$id = $_GET['id'];
if($id)
		{$result = mysql_query("SELECT * FROM gcom WHERE Id = $id") or die(mysql_error());}
	else
        {$result = mysql_query("SELECT * FROM gcom ORDER BY Id DESC LIMIT 1") or die(mysql_error());}
     while($row = mysql_fetch_array($result))
	{
	$editid = $row['Id'];
    $editbrand = $row['brand'];
	$edityear = $row['year'];
	$edittype = $row['type'];
	$editmodel = $row['model'];
	$editserialnumb = $row['serialnumb'];
	$editcpu = $row['cpu'];
	$editcpumodel = $row['cpumodel'];
	$editcpuspeed = $row['cpuspeed'];
	$editgcard = $row['gcard'];
	$editgcardmodel = $row['gcardmodel'];
	$editram = $row['ram'];
	$editHardDrive =$row['HardDrive'];
    $editHDType = 	$row['HDType'];
	$editsize = $row['size'];
    $editusbtype = $row['usbtype'];
    $editusbN = $row['usbN'];
    $editDisplayOutput = $row['DisplayOutput'];
    $editDVDdrive = $row['DVDdrive'];
    $editwebcam = $row['webcam'];
    $editwifi = $row['wifi'];
    $editlan = $row['lan'];
    $editOS = $row['OS'];
    $editOSversion = $row['OSversion'];
    $editSystemType = $row['SystemType'];
    $editcustomername = $row['customername'];
    $editcustomercell = $row['customercell'];
    $editavaliablility = $row['avaliablility'];
    $editebay = $row['ebay'];
    $editsoldprice = $row['soldprice'];
    $editsellingprice = $row['sellingprice'];
    $editID2 = $row['SbaskedforID'];
    $editID3 = $row['SBasked'];
    $editpic = $row['Pic'];
    $editcpucores =$row['cpucores'];
    $onsale =$row['onsale'];
    $editsecprice =$row['editsecprice'];
    



		}



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
    $secprice =trim($_POST['secprice']);


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
			mysql_query("UPDATE gcom SET
						brand='$brand',year='$year',type='$type',model='$model',
						serialnumb='$serialnumb',cpu='$cpu', cpumodel='$cpumodel',cpuspeed='$cpuspeed',cpucores='$cpucores',
						gcard='$gcard',gcardmodel='$gcardmodel', ram='$ram', HardDrive='$HardDrive',HDType='$HDType', 
				 		size='$size',usbtype='$usbtype',usbN='$usbN',
				 		DisplayOutput='$DisplayOutput',DVDdrive='$DVDdrive',webcam='$webcam',
				 		wifi='$wifi',lan='$lan',OS='$OS',OSversion='$OSversion',SystemType='$SystemType',
				 		Pic='$pic',sellingprice='$sellingprice',soldprice='$soldprice',
				 		customername='$customername',customercell='$customercell',avaliablility='$avaliablility',ebay='$ebay',SbaskedforID='$ID2',SBasked='$ID3',onsale='$onsale',secprice='$secprice'

				 		WHERE Id='$editid'") or die(mysql_error());
				 		
			$message = "Device successfully edited.";
			
		}
	
?>
<form action="<?php echo $_SERVER['PHP_SELF'] . "?id=$id"; ?>"  method="post" name="Input" enctype="multipart/form-data">
<div id="Add">
	<p><label>ID:</label>
			<input type="text" name="ID2" value="<?php echo $editID2; ?>"placeholder="ID" required /></p>
     <p><label>Customer Name:</label>
		<input type="text"  name="customername" value="<?php echo $editcustomername; ?>"  placeholder="Only if Sold"/></p>
	 <p><label>Customer Phone Number:</label>
		<input type="text"  name="customercell" value="<?php echo $editcustomercell; ?>" placeholder="Only if Sold"/></p>
      <p><label>Sold Price:</label>
		<input type="text"  name="soldprice" value="<?php echo $editsoldprice; ?>" placeholder="Only if Sold"/></p>
    
	<p><label>Ebay</label>
		<select name="ebay">
					<option value="OnEbay"<?php if($editebay == "OnEbay") echo "selected=\"selected\""; ?>>On Ebay</option>
					<option value="NotOnEbay"<?php if($editebay == "NotOnEbay") echo "selected=\"selected\""; ?>>Not On Ebay</option>
		</select>
		 <p><label>Avaliablity</label>
		<select name="avaliablility">
					<option value="WestEndStore"<?php if($editavaliablility == "WestEndStore") echo "selected=\"selected\""; ?>>WestEndStore</option>
					<option value="DowntownStore"<?php if($editavaliablility == "DowntownStore") echo "selected=\"selected\""; ?>>DowntownStore</option>
					<option value="Sold"<?php if($editavaliablility == "Sold") echo "selected=\"selected\""; ?>>Sold</option>
					<option value="Damaged"<?php if($editavaliablility == "Damaged") echo "selected=\"selected\""; ?>>Damaged</option>
		</select>
		<p><label>Price:</label>
		<input type="text"  name="sellingprice" value="<?php echo $editsellingprice; ?>" placeholder="Selling Price"/></p>
			<p><label>Second Price:</label>
		<input type="text"  name="secprice" value="<?php echo $editsecprice; ?>" placeholder="Second Selling Price"/></p>
     
	<p><label>Brand</label>
		<select name="brand">
					<option value="Asus" <?php if($editbrand == "Asus") echo "selected=\"selected\""; ?>>Asus</option>
					<option value="Acer"<?php if($editbrand == "Acer") echo "selected=\"selected\""; ?>>Acer</option>
					<option value="Lenovo" <?php if($editbrand == "Lenovo") echo "selected=\"selected\""; ?>>Lenovo</option>
					<option value="Toshiba"<?php if($editbrand == "Toshiba") echo "selected=\"selected\""; ?>>Toshiba</option>
					<option value="Dell"<?php if($editbrand == "Dell") echo "selected=\"selected\""; ?>>Dell</option>
					<option value="HP"<?php if($editbrand == "HP") echo "selected=\"selected\""; ?>>HP</option>
					<option value="Apple"<?php if($editbrand == "Apple") echo "selected=\"selected\""; ?>>Apple</option>
					<option value="Sony"<?php if($editbrand == "Sony") echo "selected=\"selected\""; ?>>Sony</option>
					<option value="MSI"<?php if($editbrand == "MSI") echo "selected=\"selected\""; ?>>MSI</option>
					<option value="Gateway"<?php if($editbrand == "Gateway") echo "selected=\"selected\""; ?>>Gateway</option>
					<option value="Thinkpad"<?php if($editbrand == "Thinkpad") echo "selected=\"selected\""; ?>>Thinkpad</option>
                    <option value="LG"<?php if($editbrand == "LG") echo "selected=\"selected\""; ?>>LG</option>

				</select>

	<p><label>Year:</label>
			<input type="text" name="year" value="<?php echo $edityear; ?>" placeholder="Year"/></p>

	<p><label>Type:</label>
     <select name="type">
					<option value="Laptop"<?php if($edittype == "Laptop") echo "selected=\"selected\""; ?>>Laptop</option>
					<option value="Desktop"<?php if($edittype == "Desktop") echo "selected=\"selected\""; ?>>Desktop</option>
                    <option value="AllInOne"<?php if($edittype == "AllInOne") echo "selected=\"selected\""; ?>>AllinOne</option>
         
				</select>
	<p><label>Model:</label>
		<input type="text" name="model" value="<?php echo $editmodel; ?>" placeholder="model" required /></p>
		

	<p><label>S/N:</label>
		<input type="text" name="serialnumb" value="<?php echo $editserialnumb; ?>" placeholder="S/N" required /></p>

	<p><label>Size:</label>
        <input type="text" name="size" value="<?php echo $editsize; ?>" placeholder="11?" required /></p>
		
	<p><label>CPU: </label>
				<select name="cpu">
					<option value="Intel"<?php if($editcpu == "Intel") echo "selected=\"selected\""; ?>>Intel</option>
					<option value="AMD"<?php if($editcpu == "AMD") echo "selected=\"selected\""; ?>>AMD</option>
				</select>
    </p>
	<p><label>CPU Model:</label>
		<input type="text" name="cpumodel" value="<?php echo $editcpumodel; ?>" placeholder="model" required /></p>

    <p><label>CPU Cores:</label>
		<input type="text" name="cpucores" value="<?php echo $editcpucores; ?>" placeholder="cores" /></p>

	<p><label>CPU Speed:</label>
		<input type="text" name="cpuspeed" value="<?php echo $editcpuspeed; ?>" placeholder="just numbers" required />Ghz</p>

     <p><label>Graphic Card: </label>
				<select name="gcard">
                    <option value="Intel"<?php if($editgcard == "Intel") echo "selected=\"selected\""; ?>>Intel</option>
					<option value="Nvidia"<?php if($editgcard == "Nvidia") echo "selected=\"selected\""; ?>>Nvidia</option>
					<option value="AMD"<?php if($editgcard == "AMD") echo "selected=\"selected\""; ?>>AMD</option>
                    <option value="ATI"<?php if($editgcard == "ATI") echo "selected=\"selected\""; ?>>ATI</option>
					
				</select>
    </p>

     <p><label>Graphic Card Model:</label>
		<input type="text" name="gcardmodel" value="<?php echo $editgcardmodel; ?>" placeholder="model" required /></p>


	
	<p><label>RAM:</label>
		<input type="text"  name="ram" value="<?php echo $editram; ?>" placeholder="ram" required />GB</p>

	<p><label>Hard Drive Capacity:</label>
		<input type="text"  name="HardDrive" value="<?php echo $editHardDrive; ?>" placeholder="HardDrive" required />GB</p>

	<p><label>Hard Drive Type:</label>
		        <select name="HDType">
					<option value="SSD"<?php if($editHDType == "SSD") echo "selected=\"selected\""; ?>>SSD</option>
					<option value="HDD"<?php if($editHDType == "HDD") echo "selected=\"selected\""; ?>>HDD</option>
				</select>
</p>
	<p><label>USB Type:</label>
				<select name="usbtype">
					<option value="USB2.0"<?php if($editusbtype == "USB2.0") echo "selected=\"selected\""; ?>>USB2.0</option>
					<option value="USB3.0"<?php if($editusbtype == "USB3.0") echo "selected=\"selected\""; ?>>USB3.0</option>
				</select>	
				</p>
	<p><label>Number of USB:</label>
				<select name="usbN">
					<option value="4"<?php if($editusbN == "4") echo "selected=\"selected\""; ?>>4</option>
					<option value="3"<?php if($editusbN == "3") echo "selected=\"selected\""; ?>>3</option>
					<option value="2"<?php if($editusbN == "2") echo "selected=\"selected\""; ?>>2</option>
					<option value="1"<?php if($editusbN == "1") echo "selected=\"selected\""; ?>>1</option>
				</select>
				</p>
	<p><label>Display Out Put:</label>
        <input type="text" name="DisplayOutput" value="<?php echo $editDisplayOutput; ?>" placeholder="VGA/HDMI" required/>
    </p>
	
	<p><label>DVD+/-R/W:</label>
		<input type="checkbox" name="DVDdrive" value="Y" <?php if($editDVDdrive == "Y") echo "checked=\"checked\""; ?>>DVD+/-R/W<br>
    <p><label>WebCam:</label>
		<input type="checkbox" name="webcam" value="Y"<?php if($editwebcam == "Y") echo "checked=\"checked\""; ?>>WebCam<br>
    <p><label>WIFI:</label>
		<input type="checkbox" name="wifi" value="Y"<?php if($editwifi == "Y") echo "checked=\"checked\""; ?>>Wifi<br>
    <p><label>LAN:</label>
		<input type="checkbox" name="lan" value="Y"<?php if($editlan == "Y") echo "checked=\"checked\""; ?>>LAN<br>
 	<p><label>OS:</label>
				<select name="OS">
					<option value="Windows"<?php if($editOS == "Windows") echo "selected=\"selected\""; ?>>Windows</option>
					<option value="OS X"<?php if($editOS == "OS X") echo "selected=\"selected\""; ?>>OS X</option>
				</select>	
    <p><label>OS version:</label>
		
        <select name="OSversion">
					<option value="XP Pro"<?php if($editOSversion == "XP Pro") echo "selected=\"selected\""; ?>>XP Pro</option>
					<option value="Vista Business"<?php if($editOSversion == "Vista Business") echo "selected=\"selected\""; ?>>Vista Business</option>
					<option value="Vista Home Premium"<?php if($editOSversion == "Vista Home Premium") echo "selected=\"selected\""; ?>>Vista Home Premium</option>
					<option value="7 Home Premium"<?php if($editOSversion == "7 Home Premium") echo "selected=\"selected\""; ?>>7 Home Premium</option>
					<option value="7 Pro"<?php if($editOSversion == "7 Pro") echo "selected=\"selected\""; ?>>7 Pro</option>
					<option value="7 Starter"<?php if($editOSversion == "7 Starter") echo "selected=\"selected\""; ?>>7 Starter</option>
                    <option value="8"<?php if($editOSversion == "8") echo "selected=\"selected\""; ?>>8</option>
                    <option value="8 Pro"<?php if($editOSversion == "8 Pro") echo "selected=\"selected\""; ?>>8 Pro</option>
					<option value="8.1"<?php if($editOSversion == "8.1") echo "selected=\"selected\""; ?>>8.1</option>
                    <option value="8.1 Pro"<?php if($editOSversion == "8.1 Pro") echo "selected=\"selected\""; ?>>8.1 Pro</option>
					<option value="10.9.2"<?php if($editOSversion == "10.9.2") echo "selected=\"selected\""; ?>>10.9.2</option>
					<option value="10.7.5"<?php if($editOSversion == "10.7.5") echo "selected=\"selected\""; ?>>10.7.5</option>
					
				</select>	
 	<p><label>System Type:</label>
				<select name="SystemType">
					<option value="X64"<?php if($editSystemType == "X64") echo "selected=\"selected\""; ?>>X64</option>
					<option value="X86"<?php if($editSystemType == "X86") echo "selected=\"selected\""; ?>>X86</option>
					
				</select>	
    <p><label>Image:</label>
		<input type="text"  name="pic" value="<?php echo $editpic; ?>" placeholder="Link of image https://www.finnpartners.com/images/commit1.jpg"/></p>

   <p><label>Condition:</label>
		<input type="text"  name="condition" value="<?php echo $editID3; ?>" placeholder="How it looks"/></p>


		<p><label>On Sale?:</label>
				<select name="onsale">
					<option value="yes"<?php if($onsale == "yes") echo "selected=\"selected\""; ?>>yes</option>
					<option value="no"<?php if($onsale == "no") echo "selected=\"selected\""; ?>>No</option>
					<option value=""<?php if($onsale == "") echo "selected=\"selected\""; ?>>Select</option>
					
				</select>	
			</p>
	<p><label>&nbsp;</label>
		<input type="submit" name="submit" value="Submit" />
		<input type="submit" name="delete" value="Delete" /></p>
	<?php
		if(isset($message))
		{
			if($message != "Device successfully edited.")
				echo "<div>$message</div>";
			else
				echo "<div>$message</div>";
		}
	?>
</div>
</form>


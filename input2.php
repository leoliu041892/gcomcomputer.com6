<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

	
	include("mysql_connect.php");
?>

<nav id="topNav">
     <ul id="coolMenu">
    <li><a href="internal.php">Home</a></li>
    <li><a href="print.php">Print</a></li>
    
</ul>
<?php
	$brand = trim($_POST['brand']);
    $model = trim($_POST['model']);
    $price = trim($_POST['price']);
     $type = trim($_POST['type']);
    $phonelock = trim($_POST['phonelock']);
    $looks = trim($_POST['looks']);
    $colour = trim($_POST['colour']);
    $serialnumb = trim($_POST['serialnumb']);
    $avaliablity = trim($_POST['avaliablity']);
    $storage = trim($_POST['storage']);
    $pic =trim($_POST['pic']);

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
			mysql_query("INSERT INTO phone
						(brand,model,price,phonelock,looks,colour,serialnumb,pic,avaliablity,type,storage
				 	) VALUES 
						('$brand','$model','$price','$phonelock','$looks','$colour','$serialnumb','$pic','$avaliablity','$type','$storage'
						)") or die(mysql_error());
			$message = "Device successfully added.";
		}
	
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Input" enctype="multipart/form-data">
<div id="Add">
	

		 <p><label>Avaliablity</label>
		<select name="avaliablity">
					<option value="WestEndStore">WestEndStore</option>
					<option value="DowntownStore">DowntownStore</option>
					<option value="Sold">Sold</option>
					<option value="Ebay">Ebay/WestEndStore</option>
		</select>
		<p><label>Price:</label>
		<input type="text"  name="price" placeholder="Selling Price"/></p>
     
	<p><label>Brand</label>
				<input type="text" name="brand" placeholder="Rogers.." required /></p>
	
	<p><label>Type:</label>
     <select name="type">
					<option value="Phone">Phone</option>
					<option value="pad">Tablet</option>
					<option value="accesory">Accessories</option>
				</select>

	<p><label>Model:</label>
		<input type="text" name="model" placeholder="model" required /></p>
		

	<p><label>IMEI:</label>
		<input type="text" name="serialnumb" placeholder="IMEI"   /></p>

	<p><label>phonelock:</label>
			<input type="text" name="phonelock" placeholder="Rogers.."   /></p>
				<p><label>storage:</label>
			<input type="text" name="storage" placeholder="16?"   /></p>
	
	<p><label>Condition:</label>
		<input type="text"  name="looks" placeholder="9 out of 10?"   /></p>

	<p><label>Colour:</label>
		<input type="text"  name="colour" placeholder="colour"  required /></p>

	
    <p><label>Image:</label>
		<input type="text"  name="pic" placeholder="Link of image https://www.finnpartners.com/images/commit1.jpg"/></p>

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


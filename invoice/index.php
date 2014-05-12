<?php

   include("mysql_connectforinvoice.php");
   $result = mysql_query("SELECT cid FROM invoice ORDER BY id DESC limit 1;") or die(mysql_error());
   while($row = mysql_fetch_array($result))
	{ $id = $row['cid'];}
if(!@$id){$id=1;}else{$id+=1;}
   $paddedNum = sprintf("%04d", @$id);


if(isset($_POST['submit']))
  {   
    @$name = trim($_POST['name']);
    @$phone = trim($_POST['phone']);
    @$payment = trim($_POST['payment']);
    @$address = trim($_POST['address']);
   
     if (($_POST['itemnumb'])&& ($_POST['description'])&& ($_POST['price']))
     {
            $no = count($_POST['itemnumb']);
      for ($i=0; $i <$no ; $i++) {  
        $itemnumb = $_POST['itemnumb'][$i];
        $description = $_POST['description'][$i];
        $price = $_POST['price'][$i];
        $qty = $_POST['qty'][$i];
        if($itemnumb!=""){ 
      mysql_query("INSERT INTO invoice(address,payment,name,phone,itemnumb,description,price,cid,qty) VALUES 
      ('$address','$payment','$name', '$phone','$itemnumb','$description','$price','$paddedNum','$qty')") or die(mysql_error());
      $message = "Invoice was added.";
      $link="<a href=\"pdf.php?id=$id\" target=\"_blank\">PDF</a>";
    }else
    {
      $message = "Please fill out all fields.";
    }
        }
      }
  }

?>

<style type="text/css">
.title td{
  border-bottom:1px solid #C0C0C0 ;
  padding: 10px 0px 10px 0px;
}
 td{
  padding: 10px 0px 10px 0px;
}
table{margin-left: 10%;
	   border-collapse:collapse;
     width: 990px;
     font-size: 9pt;
     color: #63473b;}
	
	input{ vertical-align:middle;
   margin:0;
   padding:0;}
  select{ vertical-align:middle;
   margin:0;
   padding:0;}
	label{font-weight: bolder;}
  .address{width: 140%;}
 </style>

<script >
  function add(){
  var dataTable = document.getElementById("dataTable");
  var newTable = document.getElementById("newTitleRows").cloneNode(true).children;
  dataTable.appendChild(newTable[0]);
}
</script>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" class="myForm">
		<table id="dataTable">
        <tr class="title">
          <td><a href="outputall.php" target="_blank">History</a></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>
      <?php if(@$message){echo "$message";}else{echo "New Invoice";}if(@$link){echo "<br/>Click to Download: $link";} ?>
    </td>
    <td>Payment Method:
      <select name="payment">
          <option value="Credit">Credit</option>
          <option value="Debit">Debit</option>
          <option value="Cash">Cash</option>
      </select>
      </td>
    </tr> 
         <tr>
          <td>Address</td>
          <td><input type="text" name="address" class="address"/></td>
 
          <td></td>
        </tr>
        <tr class="title">
        	<td><label>Customer Name</label></td>
        	<td><label>Customer Phone</label></td>
        	<td><label>Invoice Number</label></td>
        	<td><label>Date</label></td>
        </tr>
  
        <tr>
            <td><input type="text" name="name" /></td>
            <td><input type="text" name="phone" /></td>
        	<td><label><?php echo"$paddedNum";?></label></td>
        	<td><label><?php echo date("Y/m/d");?></label></td>
        </tr>


        <tr class="title">
          <td><label>Qty</label></td>
        	<td><label>Item#</label></td>
        	<td><label>Description</label></td>
        	<td><label>Price</label></td>
        	<td><input type="submit" name="submit" value="submit" />&nbsp
        <input type="button" name="more" value="more" onclick="add()" /></td>
        </tr>
        <tr>
          <td><input type="text" name="qty[]" /></td>
        	<td><input type="text" name="itemnumb[]" /></td>
        	<td><input type="text" name="description[]" /></td>
        	<td><input type="text" name="price[]" /></td>
        </tr>
        
        </table>

        
          <table>
          
		</table>
  </form>

    <table style="display:none" id="newTitleRows">

        <tr>
          <td><input type="text" name="qty[]" /></td>
          <td><input type="text" name="itemnumb[]" /></td>
          <td><input type="text" name="description[]" /></td>
          <td><input type="text" name="price[]" /></td>
        </tr>
    </table>



	

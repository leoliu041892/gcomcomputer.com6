  <?php  include("mysql_connectforinvoice.php");?>
<style type="text/css">
.title td{
  border-bottom:1px solid #C0C0C0 ;
  padding: 10px 0px 10px 0px;
  font-weight: bolder;
  width: 20%;
}
 td{
  padding: 10px 0px 10px 0px;
}
table{margin-left: 10%;
	   border-collapse:collapse;
     width: 990px;
     font-size: 9pt;
     color: #63473b;
     border:1px solid #C0C0C0 ;}
	
	input{ vertical-align:middle;
   margin:0;
   padding:0;}
  select{ vertical-align:middle;
   margin:0;
   padding:0;}
	label{font-weight: bolder;}
 </style>


  <?php
   $result = mysql_query("SELECT DISTINCT cid FROM invoice ORDER BY id;") or die(mysql_error());
   while($row = mysql_fetch_array($result))
	{ 
      $id = $row['cid'];
       $result2 = mysql_query("SELECT * FROM invoice WHERE cid = '$id'") or die(mysql_error());
      if($row2 = mysql_fetch_array($result2)) 
       {
       $id = $row2['cid'];
      $name = $row2['name'];
      $phone = $row2['phone'];
      $payment = $row2['payment'];
      $date = $row2['date'];
      $address = $row2['address'];
      $subtotal =0;
      $paddedNum = sprintf("%04d", @$id);
      echo "<br/><table><tr class=\"title\"><td>Invoice# $paddedNum</td><td>&nbsp</td><td></td><td>$date</td></tr><tr class=\"title\"><td>Name:$name</td><td>Phone:$phone</td><td></td><td>Payment:$payment</td></tr><tr class=\"title\"><td>Address</td><td>$address</td><td></td><td></td><tr><tr class=\"title\"><td>Qty</td><td>Item#</td><td>Description</td><td>Price</td><tr>";
       $result3 = mysql_query("SELECT * FROM invoice WHERE cid = '$id'") or die(mysql_error());
        while($row3 = mysql_fetch_array($result3))
      {
      $itemnumb = $row3['itemnumb'];
      $description = $row3['description'];
      $price = $row3['price'];
      $Qty = $row3['Qty'];
      $soldprice=$Qty*$price;
      $subtotal += $soldprice;

      echo "<tr><td>$Qty</td><td>$itemnumb</td><td>$description</td><td>$ $soldprice</td></tr>";
      } 
      $GST=$subtotal*0.05;
      $total = $GST+$subtotal;
       echo "<tr class=\"title\"><td>Sub-Total $ $subtotal</td><td>GST $ $GST</td><td></td><td>Total $ $total</td></tr>";
      echo "<tr class=\"title\"><td><a href=\"pdf.php?id=$id\" target=\"_blank\">PDF</a></td><td></td><td></td><td></td></tr>";
      echo "</table>";
  }
    
    }

?>

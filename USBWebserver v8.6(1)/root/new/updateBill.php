<?php
   
include "servernext.php";

$new_bill = $_GET["newBill"];
$new_customer = $_GET["newDate"];
$new_variety = $_GET["newVarieties"];
$new_amount = $_GET["newValues"];
$new_date = $_GET["newTotal"];
$new_price = $_GET["newTotal2"];
 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE bill SET  Customer Number ='$new_customer', Variety='$new_variety', Amount ='$new_amount', Date= '$new_date' , Price ='$new_price'WHERE BillNo ='$new_bill' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayBill.php";


?>

<a href="index.php">Return to main page</a>


<?php
   
include "servernext.php";

$new_bill = $_GET["new_num"];
$new_customer = $_GET["new_name"];
$new_variety = $_GET["new_batchnum"];
$new_amount = $_GET["new_date"];
$new_date = $_GET["new_variety"];
 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE production SET  Product Name ='$new_customer', Batch No='$new_variety', Price per 1kg ='$new_amount', DOM= '$new_date' WHERE Product Number ='$new_bill' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayProducts.php";


?>

<a href="index.php">Return to main page</a>


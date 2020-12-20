<?php
   
include "servernext.php";

$number = $_GET["new_number"];
$name = $_GET["new_name"];
$address = $_GET["new_address"];
$contactno = $_GET["new_contactno"];
$bill = $_GET["new_bill"];
 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE customer SET  Customer Name ='$name', Address='$address', Contact Number ='$contactno', Bill No= '$bill' WHERE BillNo ='$number' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayCustomers.php";


?>

<a href="index.php">Return to main page</a>


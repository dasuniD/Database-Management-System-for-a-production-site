<?php
   
include "servernext.php";

$new_bill = $_GET["new_number"];
$new_Date = $_GET["new_name"];
$new_Varieties = $_GET["new_address"];
$new_Values = $_GET["new_contactno"];
$new_Total = $_GET["new_salary"];
 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE bills SET  Date ='$new_Date', Varieties='$new_Varieties', Values ='$new_Values', Total= '$new_Total' WHERE BillNo ='$new_bill' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayEmployee.php";


?>

<a href="index.php">Return to main page</a>


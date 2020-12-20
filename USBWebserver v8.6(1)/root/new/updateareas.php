<?php
   
include "servernext.php";

$number = $_GET["new_name"];
$address = $_GET["new_address"];
$contactno = $_GET["new_contactno"];

 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE department SET  `Dep Name`='$address', No of Employees ='$contactno' WHERE `Dep Number`='$number' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayDepartment.php";


?>

<a href="index.php">Return to main page</a>
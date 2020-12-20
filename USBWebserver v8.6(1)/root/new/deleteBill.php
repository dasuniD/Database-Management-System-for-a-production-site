<?php

include "servernext.php";

$getBill = $_GET["bill"];


$sql = "DELETE * FROM bill WHERE BillNo LIKE ".$getBill."OR Date LIKE".$getBill;
$result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayBill.php";


?>

<a href="index.php">Return to main page</a>


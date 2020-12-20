<?php

include "servernext.php";

$getCustomer = $_GET["customer"];


$sql = "DELETE * FROM customer WHERE CustomerId LIKE ".$getCustomer."OR Name LIKE".$getCustomer."OR Name BillNo LIKE".$getCustomer;
$result = $conn->query($sql);

 echo $result;

   
include "displayCustomers.php";


?>

<a href="index.php">Return to main page</a>


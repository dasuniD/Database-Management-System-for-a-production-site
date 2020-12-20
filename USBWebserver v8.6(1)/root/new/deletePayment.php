<?php

include "servernext.php";

$getCustomer = $_GET["new_num"];


$sql = "DELETE * FROM payment WHERE Payment Number LIKE ".$getCustomer."OR Employee Number LIKE".$getCustomer;
$result = $conn->query($sql);

 echo $result;

   
include "displayPayment.php";


?>

<a href="index.php">Return to main page</a>


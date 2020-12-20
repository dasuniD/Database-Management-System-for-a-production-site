<?php

include "servernext.php";

$getProduct = $_GET["product"];


$sql = "DELETE * FROM products WHERE Pnum LIKE ".$getProduct."OR Pname LIKE".$getProduct."OR batchnum LIKE".$getProduct."OR  manufacturedate LIKE".$getProduct;
$result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayProducts.php";


?>

<a href="index.php">Return to main page</a>

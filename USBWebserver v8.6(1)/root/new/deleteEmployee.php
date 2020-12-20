<?php

include "servernext.php";

$getEmployee = $_GET["employee"];


$sql = "DELETE * FROM employee WHERE `E Number` LIKE ".$getEmployee ."OR `E Name` LIKE '%".$getEmployee."%'";


 $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayEmployee.php";


?>

<a href="index.php">Return to main page</a>


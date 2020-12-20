<?php

include "servernext.php";

$getCustomer = $_GET["customer"];


$sql = "DELETE * FROM department WHERE Dep Num LIKE ".$getCustomer."OR Dep Name LIKE".$getCustomer."OR No of Employees LIKE".$getCustomer;
$result = $conn->query($sql);

 echo $result;

   
include "displayDepartment.php";


?>

<a href="index.php">Return to main page</a>


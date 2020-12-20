<?php

include "servernext.php";

$getEmployee = $_GET["employee"];

echo $getEmployee;

$sql = "DELETE * FROM employee WHERE `E Number` LIKE '.$getEmployee .'OR `E Name` LIKE '%".$getEmployee."%'";
$result = $conn->query($sql);

echo $result;

include "displayEmployee.php";

?>

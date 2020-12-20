<?php

include "servernext.php";

$setname = $_GET["new_name"];
$setaddress = $_GET["new_address"];
$setcontactno = $_GET["new_contactno"];
$setsalary = $_GET["new_salary"];

$sql = "INSERT INTO employee VALUES (NULL, '$setname','$setaddress','$setcontactno','$setsalary')" ;
$result = $conn->query($sql);


include "displayEmployee.php";

?>


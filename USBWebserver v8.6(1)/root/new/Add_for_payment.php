<?php

include "servernext.php";


$setnum = $_GET["new_enum"];
$setsalary = $_GET["new_salary"];
$setEPFvalue = $_GET["EPFvalue"];
$setETFvalue = $_GET["ETFvalue"];
$setsalaryPaid = $_GET["new_salaryPaid"];
$setepfPaid = $_GET["epfPaid"];
$setetfPaid = $_GET["etfPaid"];
$setMonth = $_GET["month"];



$sql = "INSERT INTO payment VALUES (8,$setnum,$setsalary,$setEPFvalue,$setETFvalue ,'$setsalaryPaid' ,'$setepfPaid' ,'$setetfPaid' ,'$setMonth')" ;
$result = $conn->query($sql);



include "displayPayment.php";

?>


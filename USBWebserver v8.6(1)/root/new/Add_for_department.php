<?php

include "servernext.php";

$setAreaNo = $_GET["newarea_number"];
$setAreaName = $_GET["newarea_name"];
$setNoOfEmployee = $_GET["noof_employee"];

$sql = "INSERT INTO department(`Dep Number`,`Dep Name`,`No of Employees`) VALUES ($setAreaNo,'$setAreaName',$setNoOfEmployee)" ;
$result = $conn->query($sql);



include "displayDepartment.php";

?>


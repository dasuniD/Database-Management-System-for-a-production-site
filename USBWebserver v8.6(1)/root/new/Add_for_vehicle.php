<?php

include "servernext.php";

$setDeptvNo = $_GET["dep_number1"];
$setVehicleNo = $_GET["newvehicle_number"];
$setVehicleName = $_GET["newvehicle_name"];
$setVehicleType = $_GET["newvehicle_type"];
$setLastServicedDate1 = $_GET["last_serviced_date1"];

$setDeptmNo = $_GET["dep_number2"];
$setMachineNo = $_GET["newmachine_number"];
$setMachineType = $_GET["newmachine_type"];
$setLastServicedDate2 = $_GET["last_serviced_date2"];

$setDepttNo = $_GET["dep_number3"];
$setToolNo = $_GET["newtool_number"];
$setToolType = $_GET["newtool_type"];


$sql = "INSERT INTO vehicle(`Dep Number`, `Vehicle Number`, `Vehicle Name`, `Vehicle Type`, `Last Serviced Date`) VALUES ($setDeptvNo, $setVehicleNo,'$setVehicleName','$setVehicleType','$setLastServicedDate1')";

$result = $conn->query($sql);




$sql = "INSERT INTO machine(`Dep Number`, `Machine Number`,`Machine Type`,`Last Serviced Date`) VALUES ($setDeptmNo, $setMachineNo,'$setMachineType','$setLastServicedDate2')";
$result = $conn->query($sql);


$sql = "INSERT INTO tool(`Dep Number`, `Tool Number`, `Tool Name`) VALUES ($setDepttNo,$setToolNo,'$setToolType')";
$result = $conn->query($sql);




include "displayVehicle.php";

?>

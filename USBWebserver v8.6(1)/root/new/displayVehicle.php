<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<style type="text/css">

body
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img1.jpg);
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  color: white;
  font-size: 120%;
}
  
  #vehicle {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#vehicle td, #vehicle th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#vehicle tr:{background-color: #transparent;}

#vehicle tr:hover {background-color: #ddd;}

#vehicle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>

<h2 align="center">Changes Have Been Saved</h2>

<table id = "vehicle">
  
<br><br>

<?php

include "servernext.php";

$sql = "SELECT * FROM vehicle";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  echo "<tr><th>Dept number</th><th>Vehicle Number</th><th>Vehicle Name</th><th>Vehicle Type</th><th>Last Serviced Date</th></tr>";
  
  
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["Dep Number"]."</td>
      <td>" . $row["Vehicle Number"]."</td>
      <td>" . $row["Vehicle Name"]."</td>
      <td>" . $row["Vehicle Type"]."</td>
      <td>" . $row["Last Serviced Date"]."</td></tr>";
    
    }
  echo "</table>";
  
} else {
   
}
?>

<br><br><br>
<table id = "vehicle">

  <?php

$sql = "SELECT * FROM machine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    echo "<tr><th>Dept number</th><th>Machine Number</th><th>Machine Type</th><th>Last Serviced Date</th></tr>";

     while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["Dep Number"]."</td>
      <td>" . $row["Machine Number"]."</td>
      <td>" . $row["Machine Type"]."</td>
      <td>" . $row["Last Serviced Date"]."</td></tr>";
    
    }
  echo "</table>";
  
} 

?>
<br><br><br>
<table id = "vehicle">

  <?php

$sql = "SELECT * FROM tool";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    echo "<tr><th>Dept number</th><th>Tool Number</th><th>Tool Name</th></tr>";

     while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["Dep Number"]."</td>
        <td>" . $row["Tool Number"]."</td>
        <td>" . $row["Tool Name"]."</td>
        </tr>";
    
    }
  echo "</table>";
  
} 
   echo "<br>";
?>
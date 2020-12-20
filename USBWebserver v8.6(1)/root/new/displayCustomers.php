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
	
	#customer {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#customer td, #customer th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customer tr:{background-color: #transparent;}

#customer tr:hover {background-color: #ddd;}

#customer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>

<h2 align="center">Data Has Been Added</h2>

<table id = "customer">
	
<br><br>



<?php

include "servernext.php";

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Customer number</th><th>Customer name</th><th>Address</th><th>Contact Number</th><th>Bill number
	     </th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Customer Number"]."</td>
			<td>" . $row["Customer Name"]."</td>
			<td>" . $row["Address"]."</td>
			<td>" . $row["Contact Number"]."</td>
		    <td>" . $row["Bill No"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>
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
	
	#production {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#production td, #production th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#production tr:{background-color: #transparent;}

#production tr:hover {background-color: #ddd;}

#production th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>

<h2 align="center">Changes Have Been Saved</h2>

<table id = "production">
	
<br><br>


<?php

include "servernext.php";

$sql = "SELECT * FROM production";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Produt Number</th><th>Product Name</th><th>Batch Number</th><th>Price per 1kg</th><th>DOM
	     </th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Product Number"]."</td>
			<td>" . $row["Product Name"]."</td>
			<td>" . $row["Batch No"]."</td>
			<td>" . $row["Price per 1kg"]."</td>
		    <td>" . $row["DOM"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>
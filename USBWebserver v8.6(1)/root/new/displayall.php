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
	
	#employee {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#employee td, #employee th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#employee tr:nth-child(even){background-color: #transparent;}

#employee tr:hover {background-color: #ddd;}

#employee th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>

<h2 align="center">Data Has Been Added</h2>

<table id = "employee">
		
<br><br>

<?php

include "servernext.php";

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Employee number</th><th>Employee name</th><th>Address</th><th>Contact Number</th><th>Salary
	     </th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["E Number"]."</td>
			<td>" . $row["E Name"]."</td>
			<td>" . $row["Address"]."</td>
			<td>" . $row["Contact Number"]."</td>
		    <td>" . $row["Salary"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>
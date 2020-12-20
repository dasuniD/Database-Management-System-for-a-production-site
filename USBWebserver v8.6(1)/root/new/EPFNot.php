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
	
	#payment {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#payment td, #payment th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#product tr:nth-child(even){background-color: #f2f2f2;}

#payment tr:hover {background-color: #ddd;}

#payment th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>
<h2 align="center"  > Search Results</h2>

<br><br>

<table id = "payment">

<?php

include "servernext.php";





$sql = "SELECT * FROM payment where `Payment Number` like '$getPayment' or `Employee Number` like '$getPayment'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Payment Number</th><th>Employee Number</th><th>Salary</th><th>EPF Value</th><th>ETF Value</th><th>Salary Paid</th><th>EPF Paid</th><th>ETF paid</th><th>Month</th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Payment Number"]."</td>
			<td>" . $row["Employee Number"]."</td>
			<td>" . $row["Salary"]."</td>
			<td>" . $row["EPF value"]."</td>
		    <td>" . $row["ETF value"]."</td>
			<td>" . $row["Salary paid"]."</td>
			<td>" . $row["EPF paid"]."</td>
			<td>" . $row["ETF paid"]."</td>
			<td>" . $row["Month"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>



</body>
</html>